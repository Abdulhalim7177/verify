@extends('layouts.security')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-info text-center">
                <h2>{{ __('Security Dashboard') }}</h2>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Welcome, {{ Auth::guard('security')->user()->name }}</h4>
                    <p class="text-muted">Security Guard Dashboard</p>

                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Scan QR Codes</h5>
                                    <p class="card-text">Scan resident and visitor QR codes to verify their identity and permissions.</p>
                                    <a href="{{ route('invitations.web.verify.form') }}" class="btn btn-primary">
                                        <i class="fas fa-qrcode me-2"></i> Scan QR Code
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Scan History</h5>
                                    <p class="card-text">View your recent scans and verification history.</p>
                                    <a href="{{ route('scanlogs.index') }}" class="btn btn-secondary">
                                        <i class="fas fa-history me-2"></i> View History
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add more security features here as needed -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection