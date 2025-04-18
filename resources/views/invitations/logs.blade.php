@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Scan Logs for Invitation: {{ $invitation->guest_name }}</h1>
    
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Status</th>
                    <th>IP Address</th>
                    <th>Device</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach($scanLogs as $log)
                <tr>
                    <td>{{ $log->created_at->format('Y-m-d H:i') }}</td>
                    <td>
                        <span class="badge {{ $log->is_valid ? 'bg-success' : 'bg-danger' }}">
                            {{ $log->is_valid ? 'Valid' : 'Invalid' }}
                        </span>
                    </td>
                    <td>{{ $log->ip_address }}</td>
                    <td>{{ Str::limit($log->user_agent, 50) }}</td>
                    <td>{{ $log->validation_message }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <a href="{{ route('invitations.index') }}" class="btn btn-secondary">Back to Invitations</a>
</div>
@endsection