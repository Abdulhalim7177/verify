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
        return view('home');
    }





    public function show()
    {
        $user = Auth::user();
        $subscription = $user->subscriptions()
        ->with('plan')
        ->latest()
        ->first();
        $isActive = $subscription && $subscription->ends_at >= now() && $subscription->status === 'active';
    
        return view('subscriptions.show', compact('subscription', 'isActive'));
    }
    public function calendar()
    {
        return view('calendar');
    }
}
