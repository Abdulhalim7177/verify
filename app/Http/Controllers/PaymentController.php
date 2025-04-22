<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\{SubscriptionPlan, Transaction, Subscription};
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function pay(Request $request, $planId)
    {
        $plan = SubscriptionPlan::findOrFail($planId);
        $user = Auth::user();

        // NABRoll keys
        $apiKey = 'Pk_TeStHV9FnLZE1vSidgkH36b4s473lpKYkI58gYgc6M';
        $secret = 'Sk_teSTN-HY[n1]wIO32A-AU0XP5kRZ[tzHpOxQ6bf9]]';

        $payerRefNo = 'REF' . now()->timestamp;

        $amount = number_format($plan->price, 2, '.', '');

        // Generate hash
        $hashString = $payerRefNo . $amount . $apiKey;
        $hash = hash_hmac('sha256', $hashString, $secret);

        // Payload
        $payload = [
            "ApiKey" => $apiKey,
            "Hash" => $hash,
            "Amount" => $amount,
            "PayerRefNo" => $payerRefNo,
            "PayerName" => $user->name,
            "Email" => $user->email,
            "Mobile" => $user->phone ?? '08000000000',
            "Description" => "Subscription for {$plan->name}",
            "ResponseUrl" => route('payment.callback'),
            "MetaData" => "User ID: {$user->id}",
            "FeeBearer" => "Customer"
        ];

        // Send to NABRoll
        $response = Http::asForm()
            ->post('https://demo.nabroll.com.ng/api/v1/transactions/initiate', $payload);

        $result = $response->json();

        if (isset($result['status']) && $result['status'] === 'SUCCESSFUL') {
            Transaction::create([
                'user_id' => $user->id,
                'transaction_ref' => $result['TransactionRef'],
                'payer_ref_no' => $payerRefNo, // ✅ store it
                'amount' => $plan->price,
                'status' => 'pending',
            ]);

            return redirect($result['PaymentUrl']);
        }

        return back()->with('error', 'Payment initiation failed: ' . ($result['msg'] ?? 'Unknown error'));
    }

    public function callback(Request $request)
    {
        $transactionRef = $request->query('TransactionRef');

        if (!$transactionRef) {
            return redirect('/home')->with('error', 'Missing transaction reference.');
        }

        $transaction = Transaction::where('transaction_ref', $transactionRef)->first();

        if (!$transaction) {
            return redirect('/home')->with('error', 'Transaction not found.');
        }

        // NABRoll keys
        $apiKey = 'Pk_TeStHV9FnLZE1vSidgkH36b4s473lpKYkI58gYgc6M';
        $secret = 'Sk_teSTN-HY[n1]wIO32A-AU0XP5kRZ[tzHpOxQ6bf9]]';

        // Correct hash for verification
        $amount = number_format($transaction->amount, 2, '.', '');

        // $payerRefNo . $amount . $apiKey;

        $hashStringSecond = $transaction->payer_ref_no . $amount . $transaction->transaction_ref . $apiKey;
        $hash = hash_hmac('sha256', $hashStringSecond, $secret);

        $verifyPayload = [
            'ApiKey' => $apiKey,
            'Hash' => $hash,
            'TransactionRef' => $transaction->transaction_ref
        ];

        $response = Http::asForm()
            ->post('https://demo.nabroll.com.ng/api/v1/transactions/verify', $verifyPayload);

        $result = $response->json();
        \Log::debug('NABRoll VERIFY response:', $result);

        if (isset($result['status']) && $result['status'] === 'SUCCESSFUL') {
            $transaction->update([
                'status' => 'successful',
                'paid_at' => now()
            ]);

            $plan = SubscriptionPlan::where('price', $result['amount'])->first();

            Subscription::create([
                'user_id' => $transaction->user_id,
                'subscription_plan_id' => $plan->id,
                'starts_at' => now(),
                'ends_at' => now()->addDays($plan->duration),
                'status' => 'active'
            ]);

            return redirect('/home')->with('success', 'Subscription activated successfully.');
        }

        return redirect('/home')->with('error', 'Payment verification failed.');
    }
}
