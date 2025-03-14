@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Scan QR Code') }}</div>

                <div class="card-body">
                    <form action="{{ route('scan.process') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="qr_code_input">{{ __('Enter QR Code Manually') }}</label>
                            <input type="text" name="qr_code_input" id="qr_code_input" class="form-control" placeholder="Paste QR code content here">
                        </div>

                        <div class="form-group">
                            <label for="qr_code_image">{{ __('Upload QR Code Image') }}</label>
                            <input type="file" name="qr_code_image" id="qr_code_image" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">{{ __('Decode QR Code') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection