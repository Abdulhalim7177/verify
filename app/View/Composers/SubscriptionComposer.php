<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Subscription;
use App\Models\SubAccount;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SubscriptionComposer
{
    public function compose(View $view)
    {
        $user = Auth::user();

        if (!$user) {
            $view->with(['globalSubscriptionStatus' => null]);
            return;
        }

        $sub = SubAccount::where('email', $user->email)->first();
        $owner = $sub ? $sub->user : $user;

        $subscription = Subscription::where('user_id', $owner->id)
            ->latest()
            ->first();

        $status = null;
        $daysRemaining = null;

        if ($subscription) {
            if (Carbon::parse($subscription->ends_at)->isPast() && $subscription->status === 'active') {
                $subscription->update(['status' => 'expired']);
            }

            $daysRemaining = Carbon::now()->diffInDays(Carbon::parse($subscription->ends_at), false);

            if ($subscription->status === 'active') {
                if ($daysRemaining <= 10 && $daysRemaining > 0) {
                    $status = 'expiring_soon';
                }
            }
        }

        $view->with([
            'globalSubscriptionStatus' => $status,
            'globalDaysRemaining' => $daysRemaining,
        ]);
    }
}
