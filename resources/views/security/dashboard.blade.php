@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Security Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Welcome, {{ Auth::guard('security')->user()->name }}</h4>
                    <p>You are logged in as a security personnel!</p>
                    
                    <div class="mt-4">
                        <div class="list-group">
                            <a href="{{ route('security.scan') }}" class="list-group-item list-group-item-action">
                                Scan QR Code
                            </a>
                            <!-- Add more security-specific actions here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection