@extends('layouts.admin')
@section('content')
<div class="container">
    <h2>Edit Plan</h2>
    <form method="POST" action="{{ route('admin.plans.update', $plan) }}">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $plan->name }}" required>
        </div>
        <div class="mb-3">
            <label>Price (₦)</label>
            <input type="number" name="price" step="0.01" class="form-control" value="{{ $plan->price }}" required>
        </div>
        <div class="mb-3">
            <label>Duration (days)</label>
            <input type="number" name="duration" class="form-control" value="{{ $plan->duration }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection