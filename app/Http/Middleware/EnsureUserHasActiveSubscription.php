<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\{Subscription, SubAccount};
use App\Models\SubscriptionPlan;    

class EnsureUserHasActiveSubscription
{
    public function handle(Request $request, Closure $next): mixed
{
    $user = Auth::user();

    // Check if user is a sub-account
    $subAccount = SubAccount::where('email', $user->email)->first();

    $subscriptionUserId = $subAccount->user_id ?? $user->id;

    $hasActive = Subscription::where('user_id', $subscriptionUserId)
        ->where('ends_at', '>=', now())
        ->where('status', 'active')
        ->exists();
     $activeSubscription = $user->subscriptions()
        ->where('ends_at', '>=', now())
        ->where('status', 'active')
        ->latest()
        ->first();

    if (!$hasActive) {
        return redirect()->route('plans.index')
            ->with('error', 'You or your parent account need an active subscription.');
    }

    return $next($request);
}

}

