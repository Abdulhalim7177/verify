<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Subscription;
use App\Models\SubscriptionPlan;    

class EnsureUserHasActiveSubscription
{
    public function handle(Request $request, Closure $next): mixed
    {
        $user = Auth::user();

        $activeSubscription = $user->subscriptions()
            ->where('ends_at', '>=', now())
            ->where('status', 'active')
            ->latest()
            ->first();

        if (!$activeSubscription) {
            return redirect()->route('plans.index')
                ->with('error', 'You need an active subscription to access this page.');
        }

        return $next($request);
    }
}
