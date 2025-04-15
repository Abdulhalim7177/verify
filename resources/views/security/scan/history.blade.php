@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Scan History') }}</div>

                <div class="card-body">
                    <h4>Your Recent Scans</h4>
                    
                    @if($scans->isEmpty())
                        <div class="alert alert-info">
                            You haven't performed any scans yet.
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Date & Time</th>
                                        <th>Type</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($scans as $scan)
                                        <tr>
                                            <td>{{ $scan->scanned_at->format('M d, Y H:i') }}</td>
                                            <td>
                                                @if($scan->qr_type === 'resident')
                                                    <span class="badge bg-primary">Resident</span>
                                                @elseif($scan->qr_type === 'invitation')
                                                    <span class="badge bg-info">Invitation</span>
                                                @else
                                                    <span class="badge bg-secondary">{{ ucfirst($scan->qr_type) }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($scan->qr_type === 'resident')
                                                    {{ $scan->details['resident_name'] ?? 'N/A' }}
                                                @elseif($scan->qr_type === 'invitation')
                                                    {{ $scan->details['guest_name'] ?? 'N/A' }}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>
                                                @if($scan->status === 'success')
                                                    <span class="badge bg-success">Success</span>
                                                @elseif($scan->status === 'warning')
                                                    <span class="badge bg-warning text-dark">Warning</span>
                                                @elseif($scan->status === 'error')
                                                    <span class="badge bg-danger">Error</span>
                                                @else
                                                    <span class="badge bg-secondary">{{ ucfirst($scan->status) }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#scanModal{{ $scan->id }}">
                                                    View Details
                                                </button>
                                                
                                                <!-- Modal for scan details -->
                                                <div class="modal fade" id="scanModal{{ $scan->id }}" tabindex="-1" aria-labelledby="scanModalLabel{{ $scan->id }}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="scanModalLabel{{ $scan->id }}">Scan Details</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p><strong>Date & Time:</strong> {{ $scan->scanned_at->format('F d, Y H:i:s') }}</p>
                                                                <p><strong>Type:</strong> {{ ucfirst($scan->qr_type) }}</p>
                                                                <p><strong>Status:</strong> {{ ucfirst($scan->status) }}</p>
                                                                
                                                                @if($scan->qr_type === 'resident')
                                                                    <p><strong>Resident Name:</strong> {{ $scan->details['resident_name'] ?? 'N/A' }}</p>
                                                                    <p><strong>Resident Email:</strong> {{ $scan->details['resident_email'] ?? 'N/A' }}</p>
                                                                @elseif($scan->qr_type === 'invitation')
                                                                    <p><strong>Guest Name:</strong> {{ $scan->details['guest_name'] ?? 'N/A' }}</p>
                                                                    <p><strong>Host Name:</strong> {{ $scan->details['host_name'] ?? 'N/A' }}</p>
                                                                    <p><strong>Event Date:</strong> {{ $scan->details['event_date'] ?? 'N/A' }}</p>
                                                                    <p><strong>Valid:</strong> {{ isset($scan->details['is_valid']) ? ($scan->details['is_valid'] ? 'Yes' : 'No') : 'N/A' }}</p>
                                                                    <p><strong>Used:</strong> {{ isset($scan->details['is_used']) ? ($scan->details['is_used'] ? 'Yes' : 'No') : 'N/A' }}</p>
                                                                    @if(isset($scan->details['used_at']) && $scan->details['used_at'])
                                                                        <p><strong>Used At:</strong> {{ $scan->details['used_at'] }}</p>
                                                                    @endif
                                                                @elseif($scan->qr_type === 'error')
                                                                    <p><strong>Error Message:</strong> {{ $scan->details['error_message'] ?? 'Unknown error' }}</p>
                                                                @endif
                                                                
                                                                @if(isset($scan->details['notes']))
                                                                    <p><strong>Notes:</strong> {{ $scan->details['notes'] }}</p>
                                                                @endif
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="d-flex justify-content-center mt-4">
                            {{ $scans->links() }}
                        </div>
                    @endif
                    
                    <div class="mt-4">
                        <a href="{{ route('security.dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
                        <a href="{{ route('security.scan') }}" class="btn btn-primary">Scan QR Code</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection