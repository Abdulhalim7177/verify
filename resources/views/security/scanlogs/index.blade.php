
@extends('layouts.security')
@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 fw-bold">Scan History</h1>
        <span class="badge bg-primary text-white">
            {{ $logs->count() }} {{ Str::plural('Record', $logs->count()) }}
        </span>
    </div>

    @if($logs->count() > 0)
        <div class="card shadow-sm">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Invitation Guest</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Scanned At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($logs as $log)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-secondary text-white d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                                            <span>{{ substr($log->invitation->guest_name ?? 'N/A', 0, 1) }}</span>
                                        </div>
                                        <div class="ms-3">
                                            <div class="fw-bold">
                                                {{ $log->invitation->guest_name ?? 'N/A' }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if($log->invitation->street_address || $log->invitation->house_number)
                                        <div>
                                            {{ $log->invitation->street_address ?? 'No street' }}
                                        </div>
                                        <div class="text-muted">
                                            House: {{ $log->invitation->house_number ?? 'N/A' }}
                                        </div>
                                    @else
                                        <span class="text-muted">No address provided</span>
                                    @endif
                                </td>
                                <td>
                                    @if($log->is_valid)
                                        <span class="badge bg-success">Valid</span>
                                    @else
                                        <span class="badge bg-danger">Invalid</span>
                                        <div class="text-muted small mt-1">
                                            {{ $log->validation_message }}
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    @if($log->scanned_at)
                                        <div>
                                            {{ $log->scanned_at->format('M d, Y') }}
                                        </div>
                                        <div class="text-muted small">
                                            {{ $log->scanned_at->format('H:i') }}
                                        </div>
                                    @else
                                        N/A
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-4">
            {{ $logs->links('pagination::bootstrap-4') }}
        </div>
    @else
        <div class="card shadow-sm text-center p-5">
            <div class="mb-4">
                <div class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center mx-auto" style="width: 64px; height: 64px;">
                    <i class="bi bi-file-earmark-text h4 mb-0"></i>
                </div>
            </div>
            <h3 class="h5 fw-bold">No Records Found</h3>
            <p class="text-muted">No scan logs are currently available in the system.</p>
        </div>
    @endif
</div>
@endsection