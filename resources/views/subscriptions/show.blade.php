@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-4">
        
        <div class="card-body border-primary shadow">
        <h1 class="text-center">Welcome, {{ auth()->user()->name }}</h1>
            @if (!$isActive)
                <div class="alert alert-warning">
                    <strong>Notice:</strong> You currently have no active subscription.
                    <a href="{{ route('plans.index') }}" class="btn btn-sm btn-primary ms-2">Subscribe Now</a>
                </div>
            @endif

            @if ($subscription)
                <h1><strong>Plan:</strong> {{ $subscription->plan->name }}</h1>
                <h3><strong>Price:</strong> ₦{{ number_format($subscription->plan->price, 2) }}</h3>
                <h3><strong>Expires:</strong> {{ \Carbon\Carbon::parse($subscription->ends_at)->format('d M, Y H:i') }}</h3>
                <br>
                <h2><strong>Status:</strong></h2> <br>

                @if ($status === 'expiring_soon')
                    <p>
                        <span class="alert alert-warning">
                            Expiring Soon  {{ ceil($daysRemaining) }} day{{ ceil($daysRemaining) > 1 ? 's' : '' }} left
                        </span>
                    </p>
                @elseif ($status === 'active')
                    <p>
                        <span class="alert alert-success">
                            Active  {{ ceil($daysRemaining) }} day{{ ceil($daysRemaining) > 1 ? 's' : '' }} left
                        </span>
                    </p>
                @else
                    <p><span class="badge bg-secondary">Inactive</span></p>
                @endif

            @else
                <p>You do not have a subscription.</p>
                <a href="{{ route('plans.index') }}" class="btn btn-primary">Subscribe Now</a>
            @endif
        </div>
    </div>
</div>
@endsection
