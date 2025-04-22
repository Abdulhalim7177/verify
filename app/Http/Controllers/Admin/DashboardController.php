<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Invitation, User, Subscription, Transaction};
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalInvitations = Invitation::count();
        $totalTransactions = Transaction::count();
        $activeSubscriptions = Subscription::where('status', 'active')->count();
        $expiredSubscriptions = Subscription::where('status', 'expired')->count();
        $totalRevenue = Transaction::where('status', 'successful')->sum('amount');

        $recentTransactions = \App\Models\Transaction::with('user')
            ->where('status', 'successful')
            ->latest()
            ->take(5)
            ->get();

        $recentSubscriptions = \App\Models\Subscription::with('user', 'plan')
            ->latest()
            ->take(5)
            ->get();
        $dailyTransactionTotals = \App\Models\Transaction::where('status', 'successful')
            ->where('paid_at', '>=', now()->subDays(6))
            ->get()
            ->groupBy(fn($txn) => \Carbon\Carbon::parse($txn->paid_at)->format('D'))
            ->map(fn($txns) => $txns->sum('amount'))
            ->toArray();


        return view('admin.dashboard', compact(
            'totalUsers',
            'totalTransactions',
            'activeSubscriptions',
            'expiredSubscriptions',
            'totalRevenue',
            'totalInvitations',
            'recentTransactions',
            'recentSubscriptions'
            , 'dailyTransactionTotals'
        ));
        return view('admin.dashboard');
    }
}
