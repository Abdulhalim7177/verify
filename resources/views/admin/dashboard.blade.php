@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <h1> {{Auth::guard('admin')->user()->name}} </h1>
    <p>Welcome to the admin dashboard!</p>
</div>
@endsection