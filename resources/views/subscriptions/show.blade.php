@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Welcome, {{ auth()->user()->name }}</h2>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @elseif (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="card mt-4">
        <div class="card-header">
            <strong>Subscription Info</strong>
        </div>
        <div class="card-body">
            @if (!$isActive)
            <div class="alert alert-warning">
                <strong>Notice:</strong> You currently have no active subscription.
                <a href="{{ route('plans.index') }}" class="btn btn-sm btn-primary ms-2">Subscribe Now</a>
            </div>
            @endif

            @if ($subscription && $subscription->ends_at >= now())
            <p><strong>Plan:</strong> {{ $subscription->plan->name }}</p>
            <p><strong>Price:</strong> ₦{{ number_format($subscription->plan->price, 2) }}</p>
            <p><strong>Expires:</strong> {{ \Carbon\Carbon::parse($subscription->ends_at)->format('d M, Y H:i') }}</p>
            <p><span class="badge bg-success">Active</span></p>
            @else
            <p>You do not have an active subscription.</p>
            <a href="{{ route('plans.index') }}" class="btn btn-primary">Subscribe Now</a>
            @endif
        </div>
    </div>
</div>
@endsection