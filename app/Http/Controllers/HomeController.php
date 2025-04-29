<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\SubAccount;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $subAccounts = auth()->user()->subAccounts;
        $subAccount = SubAccount::where('email', $user->email)->first();
        $subscriptionUserId = $subAccount->user_id ?? $user->id;
        $subscriptions = Subscription::with('plan')->where('user_id', $subscriptionUserId)->latest()->get();

        return view('home', compact('subAccounts', 'subscriptions'));
    }





    public function show()
    {
        $user = Auth::user();
    
        // Check if user is a sub-account
        $subAccount = SubAccount::where('email', $user->email)->first();
        $owner = $subAccount ? $subAccount->user : $user;
    
        // Get latest subscription (even if expired)
        $latestSubscription = Subscription::with('plan')
            ->where('user_id', $owner->id)
            ->latest()
            ->first();
    
        $status = 'inactive';
        $daysRemaining = null;
        $isActive = false;
    
        if ($latestSubscription) {
            $endsAt = Carbon::parse($latestSubscription->ends_at);
    
            // ✅ Check and update expired subscription
            if ($endsAt->isPast() && $latestSubscription->status === 'active') {
                $latestSubscription->status = 'expired';
                $latestSubscription->save();
            }
    
            $daysRemaining = now()->diffInDays($endsAt, false);
    
            // ✅ Determine subscription status
            if ($latestSubscription->status === 'active') {
                $isActive = true;
    
                if ($daysRemaining <= 10 && $daysRemaining > 0) {
                    $status = 'expiring_soon';
                } elseif ($daysRemaining > 10) {
                    $status = 'active';
                }
            } elseif ($latestSubscription->status === 'expired') {
                $status = 'expired';
            }
        }
    
        // Subscription history for this user or their parent
        $subscriptions = Subscription::with('plan')
            ->where('user_id', $owner->id)
            ->latest()
            ->get();
    
        return view('subscriptions.show', [
            'subscription' => $latestSubscription,
            'subscriptions' => $subscriptions,
            'isActive' => $isActive,
            'status' => $status,
            'daysRemaining' => $daysRemaining,
        ]);
    }
    
    public function calendar()
    {
        return view('calendar');
    }
}
