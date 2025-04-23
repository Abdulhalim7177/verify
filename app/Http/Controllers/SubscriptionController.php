<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionPlan;
use App\Models\Subscription;
use Carbon\Carbon;

class SubscriptionController extends Controller
// This controller handles the subscription plans for authenticated users.
// It retrieves all subscription plans from the database and passes them to the view.
{
    public function index()
    {
        $plans = SubscriptionPlan::all();
        return view('subscriptions.index', compact('plans'));
    }

    public function expireOutdatedSubscriptions()
    {
        Subscription::where('status', 'active')
            ->where('ends_at', '<', now())
            ->update(['status' => 'expired']);

        return response()->json(['message' => 'Expired subscriptions updated.']);
    }
    
}
