@php
    $user = auth()->user();

    $sub = \App\Models\SubAccount::where('email', $user->email)->first();
    $owner = $sub ? $sub->user : $user;

    $subscription = \App\Models\Subscription::where('user_id', $owner->id)
        ->where('ends_at', '>=', now())
        ->where('status', 'active')
        ->latest()
        ->first();

        use Carbon\Carbon;

$expiresIn = $subscription ? Carbon::parse($subscription->ends_at)->diffInSeconds(now(), false) : null;

@endphp

@if ($subscription && $expiresIn > 0 && $expiresIn <= (3 * 24 * 60 * 60))
    <div class="alert alert-warning text-center">
        <strong>Heads up!</strong> Your subscription expires in:
        <span id="sub-expiry-timer" data-seconds="{{ $expiresIn }}"></span>
    </div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const timerEl = document.getElementById('sub-expiry-timer');
        if (!timerEl) return;

        let seconds = parseInt(timerEl.dataset.seconds);

        const updateTimer = () => {
            if (seconds <= 0) {
                timerEl.textContent = 'Expired!';
                return;
            }

            const d = Math.floor(seconds / 86400);
            const h = Math.floor((seconds % 86400) / 3600);
            const m = Math.floor((seconds % 3600) / 60);
            const s = seconds % 60;

            timerEl.textContent = `${d}d ${h}h ${m}m ${s}s`;

            seconds--;
            setTimeout(updateTimer, 1000);
        };

        updateTimer();
    });
</script>
