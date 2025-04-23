@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Hello, {{ auth()->user()->name }}</h2>
    <p class="lead">Welcome to your Sub-Account Dashboard</p>

    <div class="alert alert-info">
        You are logged in as a family member of:

        @php
            $parent = auth()->user()->parent?->user;
        @endphp

        @if ($parent)
            <strong>{{ $parent->name }} ({{ $parent->email }})</strong>
        @else
            <strong>Unknown (Link not found)</strong>
        @endif
    </div>

    <ul class="list-group mt-3">
        <li class="list-group-item">Your Email: {{ auth()->user()->email }}</li>
        <li class="list-group-item">Subscription is shared from parent account.</li>
        <li class="list-group-item">Payments and plan changes are managed by your parent.</li>
    </ul>
</div>
@endsection
