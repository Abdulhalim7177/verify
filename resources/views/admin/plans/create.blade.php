@extends('layouts.admin')
@section('content')
<div class="container">
    <h2>Create Plan</h2>
    <form method="POST" action="{{ route('admin.plans.store') }}">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Price (₦)</label>
            <input type="number" name="price" step="0.01" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Duration (days)</label>
            <input type="number" name="duration" class="form-control" required>
        </div>
        <button class="btn btn-primary">Save</button>
    </form>
</div>
@endsection