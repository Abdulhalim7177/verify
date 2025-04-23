<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

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
        $subAccount = \App\Models\SubAccount::where('email', $user->email)->first();
        $subscriptionUserId = $subAccount->user_id ?? $user->id;
        $subscriptions = \App\Models\Subscription::with('plan')->where('user_id', $subscriptionUserId)->latest()->get();

        return view('home', compact('subAccounts'));
    }





    public function show()
    {
        $user = Auth::user();
        $subAccounts = auth()->user()->subAccounts;
        $subscription = $user->subscriptions()
        
        ->with('plan')
        ->latest()
        ->first();
        $subAccount = \App\Models\SubAccount::where('email', $user->email)->first();
        $subscriptionUserId = $subAccount->user_id ?? $user->id;
        $subscriptions = \App\Models\Subscription::with('plan')->where('user_id', $subscriptionUserId)->latest()->get();
        $isActive = $subscription && $subscription->ends_at >= now() && $subscription->status === 'active';
 

return view('home', compact('subscription', 'isActive', 'subAccounts'));

    
        return view('subscriptions.show', compact('subscription', 'isActive', 'subscriptions'));
    }
    public function calendar()
    {
        return view('calendar');
    }
}
