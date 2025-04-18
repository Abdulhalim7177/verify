@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body text-center">
            <h2 class="card-title">
                @if($valid)
                    <span class="text-success">✓ Valid Invitation</span>
                @else
                    <span class="text-danger">✗ Invalid Invitation</span>
                @endif
            </h2>
            
            <div class="my-4">
                <p class="lead">{{ $message }}</p>
                <div class="alert alert-info text-start">
                    <h5>Invitation Details</h5>
                    <p><strong>Guest:</strong> {{ $invitation->guest_name }}</p>
                    <p><strong>Host:</strong> {{ $invitation->user->name }}</p>
                    <p><strong>Expires:</strong> {{ \Carbon\Carbon::parse($invitation->expire_at)->format('Y-m-d H:i') }}</p>
                </div>
            </div>
            
            <a href="/" class="btn btn-primary">Return Home</a>
<a href="" class="btn btn-sm btn-info">View Logs</a>
        </div>
    </div>
</div>
@endsection