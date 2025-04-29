@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Edit Security: {{ $security->name }}</h2>

    <form action="{{ route('admin.securities.update', $security) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input name="name" class="form-control" required value="{{ old('name', $security->name) }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input name="email" type="email" class="form-control" required value="{{ old('email', $security->email) }}">
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input name="phone" class="form-control" required value="{{ old('phone', $security->phone) }}">
        </div>

        <button class="btn btn-primary">Update Security</button>
    </form>
</div>
@endsection
