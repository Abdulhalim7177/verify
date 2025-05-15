@extends('layouts.admin')

@section('content')

<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Add New Resident</h2>
        <a href="{{ route('admin.users.index') }}"  class="btn btn-secondary">Back to List</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.users.store') }} " enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" id="phone" name="phone" class="form-control" required value="{{ old('phone') }}">
                </div>
                <div class="mb-3">
                    <label for="street_address" class="form-label">Street Address</label>
                    <input type="text" id="street_address" name="street_address" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="house_number" class="form-label">House Number</label>
                    <input type="text" id="house_number" name="house_number" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="text-end">
                    <div class="d-flex justify-content-end" ">
                            <!--begin::Add user-->
                            <button type=" submit" class="btn btn-primary">
                        <i class="ki-duotone ki-plus fs-2 d-none d-md-inline-block me-2"></i>Add Account</button>
                        <!--end::Add user-->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection