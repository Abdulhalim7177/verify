@extends('layouts.admin')
@section('content')
<div class="container">
    <h2>Assign Subscription to User</h2>
    <form method="POST" action="{{ route('admin.subscriptions.store') }}">
        @csrf
        <div class="mb-3">
            <label>User</label>
            <select name="user_id" class="form-select">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Subscription Plan</label>
            <select name="subscription_plan_id" class="form-select">
                @foreach ($plans as $plan)
                    <option value="{{ $plan->id }}">{{ $plan->name }} (₦{{ $plan->price }})</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Assign Subscription</button>
    </form>
</div>
@endsection
