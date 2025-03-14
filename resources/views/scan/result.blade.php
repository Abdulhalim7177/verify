@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('QR Code Decoded Result') }}</div>

                <div class="card-body">
                    @if (session('decodedContent'))
                        <div class="alert alert-success">
                            <strong>{{ __('Decoded Content:') }}</strong>
                            <p>{{ session('decodedContent') }}</p>
                        </div>
                    @else
                        <div class="alert alert-danger">
                            {{ __('No QR code content found.') }}
                        </div>
                    @endif

                    <a href="{{ route('scan.form') }}" class="btn btn-primary">{{ __('Scan Another QR Code') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection