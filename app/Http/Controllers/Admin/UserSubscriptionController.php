<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{User, Subscription, SubscriptionPlan};
use Illuminate\Http\Request;

class UserSubscriptionController extends Controller
{
    public function create()
    {
        return view('admin.subscriptions.assign', [
            'users' => User::all(),
            'plans' => SubscriptionPlan::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'subscription_plan_id' => 'required|exists:subscription_plans,id'
        ]);

        Subscription::create([
            'user_id' => $request->user_id,
            'subscription_plan_id' => $request->subscription_plan_id,
            'starts_at' => now(),
            'ends_at' => now()->addDays(SubscriptionPlan::find($request->subscription_plan_id)->duration),
            'status' => 'active'
        ]);

        return back()->with('success', 'Subscription manually assigned to user.');
    }

    public function deactivate(Subscription $subscription)
    {
        $subscription->update(['status' => 'expired']);
        return back()->with('success', 'Subscription manually deactivated.');
    }
    
    public function index()
    {
        $subscriptions = \App\Models\Subscription::with('user', 'plan')
            ->latest()
            ->paginate(20);

        return view('admin.subscriptions.index', compact('subscriptions'));
    }
}
