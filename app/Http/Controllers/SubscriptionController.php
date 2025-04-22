<?php

namespace App\Http\Controllers;
use App\Models\SubscriptionPlan;

class SubscriptionController extends Controller
// This controller handles the subscription plans for authenticated users.
// It retrieves all subscription plans from the database and passes them to the view.
{
    public function index()
    {
        $plans = SubscriptionPlan::all();
        return view('subscriptions.index', compact('plans'));
    }
}
