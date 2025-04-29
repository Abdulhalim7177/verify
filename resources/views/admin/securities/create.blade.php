@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Add New Security</h2>

    <form action="{{ route('admin.securities.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input name="name" class="form-control" required value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input name="phone" class="form-control" required value="{{ old('phone') }}">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <button class="btn btn-success">Create Security</button>
    </form>
</div>
@endsection
