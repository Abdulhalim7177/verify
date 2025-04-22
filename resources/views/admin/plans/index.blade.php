@extends('layouts.admin')
@section('content')
<div class="container">
    <h2>Subscription Plans</h2>
    <a href="{{ route('admin.plans.create') }}" class="btn btn-success mb-3">Create New Plan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th><th>Price</th><th>Duration (days)</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plans as $plan)
            <tr>
                <td>{{ $plan->name }}</td>
                <td>₦{{ number_format($plan->price, 2) }}</td>
                <td>{{ $plan->duration }}</td>
                <td>
                    <a href="{{ route('admin.plans.edit', $plan) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.plans.destroy', $plan) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection