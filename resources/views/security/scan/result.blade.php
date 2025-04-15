@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Scan Result') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="result-container">
                        <h4 id="result-title">{{ session('result_title', 'Scan Complete') }}</h4>
                        <p id="result-message">{{ session('result_message', 'The QR code was processed successfully.') }}</p>
                        
                        @if(session('result_data'))
                            <div class="card mt-3 mb-3">
                                <div class="card-header">Details</div>
                                <div class="card-body">
                                    <dl class="row">
                                        @foreach(session('result_data') as $key => $value)
                                            <dt class="col-sm-3">{{ ucfirst(str_replace('_', ' ', $key)) }}:</dt>
                                            <dd class="col-sm-9">{{ $value }}</dd>
                                        @endforeach
                                    </dl>
                                </div>
                            </div>
                        @endif
                        
                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('security.dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
                            <a href="{{ route('security.scan') }}" class="btn btn-primary">Scan Another</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection