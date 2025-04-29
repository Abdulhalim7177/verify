@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body">
                <h2 class="card-title h4 font-weight-bold mb-4">
                    Invitation {{ $invitation->status === 'active' ? 'Valid ✅' : 'Invalid/Expired ❌' }}
                </h2>

                <ul class="list-unstyled">
                    <li><strong>Owner:</strong> {{ $invitation->user->name }}</li>
                    <li><strong>Guest:</strong> {{ $invitation->guest_name }}</li>
                    <li><strong>Street:</strong> {{ $invitation->street_address ?? 'N/A' }}</li>
                    <li><strong>House No.:</strong> {{ $invitation->house_number ?? 'N/A' }}</li>
                    <li><strong>Expires at:</strong> {{ $invitation->expire_at->toDayDateTimeString() }}</li>
                </ul>

                <a href="{{ route('invitations.web.verify.form') }}" class="btn btn-link mt-4">
                    ← Test another token
                </a>
            </div>
        </div>
    </div>
@endsection
