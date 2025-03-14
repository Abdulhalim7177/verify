@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>{{ __('Profile Information') }}</h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>{{ __('Name:') }}</strong> {{ Auth::user()->name }}
                        </li>
                        <li class="list-group-item">
                            <strong>{{ __('Email:') }}</strong> {{ Auth::user()->email }}
                        </li>

                        @if (Auth::user()->role)
                            <li class="list-group-item">
                                <strong>{{ __('Role:') }}</strong> {{ Auth::user()->role }}
                            </li>
                        @endif
                        
                        @if (Auth::user()->address)
                            <li class="list-group-item">
                                <strong>{{ __('Address:') }}</strong> {{ Auth::user()->address }}
                            </li>
                        @endif
                        
                        @if (Auth::user()->phone)
                            <li class="list-group-item">
                                <strong>{{ __('Phone:') }}</strong> {{ Auth::user()->phone }}
                            </li>
                        @endif

                        @if (Auth::user()->altphone)
                            <li class="list-group-item">
                                <strong>{{ __('Alternative Phone:') }}</strong> {{ Auth::user()->altphone }}
                            </li>
                        @endif

                        @if (Auth::user()->qrcode)
                            <li class="list-group-item">
                                <strong>{{ __('QR Code:') }}</strong> 
                                <div>
                                    <img src="{{ asset('storage/' . Auth::user()->qrcode) }}" alt="QR Code" class="img-thumbnail" width="200">
                                </div>
                            </li>
                        @endif

                        @if (Auth::user()->image)
                            <li class="list-group-item">
                                <strong>{{ __('Profile Image:') }}</strong> 
                                <img src="{{ asset('storage/profile_images/' . Auth::user()->image) }}" alt="Profile Image" class="img-thumbnail" width="100">
                            </li>
                        @endif
                    </ul>

                    <div class="mt-3">
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">{{ __('Update Profile') }}</a>
                    </div>
                    <a href="{{ route('invitations.create') }}" class="btn btn-primary float-right">{{ __('Create New Invitation') }}</a>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection