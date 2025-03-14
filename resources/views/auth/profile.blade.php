@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Profile') }}</div>

                <div class="card-body">
                    <!-- Display success message -->
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Profile Update Form -->
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" id="profileForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="role">{{ __('Role') }}</label>
                            <input type="text" name="role" id="role" class="form-control" value="{{ Auth::user()->role }}" required>
                        </div>

                        <div class="form-group">
                            <label for="address">{{ __('Address') }}</label>
                            <input type="text" name="address" id="address" class="form-control" value="{{ Auth::user()->address }}" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">{{ __('Phone') }}</label>
                            <input type="text" name="phone" id="phone" class="form-control" value="{{ Auth::user()->phone }}" required>
                        </div>

                        <div class="form-group">
                            <label for="altphone">{{ __('Alternative Phone') }}</label>
                            <input type="text" name="altphone" id="altphone" class="form-control" value="{{ Auth::user()->altphone }}" required>
                        </div>

                        <div class="form-group">
                            <label for="image">{{ __('Profile Image') }}</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">{{ __('Update Profile') }}</button>
                        </div>
                    </form>

                    <!-- QR Code Generation Form -->
                    @if (session('show_qr_button') && !Auth::user()->qrcode)
                        <form action="{{ route('resident.qrcode.generate') }}" method="POST" id="qrCodeForm">
                            @csrf
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success">{{ __('Generate QR Code') }}</button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection