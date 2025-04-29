@extends('layouts.security')

@section('content')
    <div class="container mt-5">
        <div class="shadow">
            <div class="alert alert-info text-start">
                <h1 class="card-title font-weight-bold mb-4">
                    Invitation {{ $invitation->status === 'active' ? 'Valid ✅' : 'Invalid/Expired ❌' }}
                </h1>
                <p><strong>Host:</strong> {{ $invitation->user->name }}</p>
                    <p><strong>Guest:</strong> {{ $invitation->guest_name }}</p>
                    <p><strong>Street Address:</strong> {{ $invitation->street_address ?? 'N/A' }}</p>
                    <p><strong>House No:</strong>  {{ $invitation->house_number ?? 'N/A' }}</p>
                <a href="{{ route('invitations.web.verify.form') }}" class="btn btn-primary mt-4">
                    ← Test another token
                </a>
            </div>
        </div>
    </div>
@endsection
