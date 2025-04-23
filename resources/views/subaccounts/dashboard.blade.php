@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Hello, {{ auth()->user()->name }}</h2>
    <p class="lead">Welcome to your Sub-Account Dashboard.</p>

    <div class="alert alert-info">
        You're accessing this platform as a family member of another account.
    </div>

    <ul class="list-group">
        <li class="list-group-item">Email: {{ auth()->user()->email }}</li>
        <li class="list-group-item">You do not have payment access.</li>
        <li class="list-group-item">Subscription is shared from parent account.</li>
    </ul>
</div>
@endsection
