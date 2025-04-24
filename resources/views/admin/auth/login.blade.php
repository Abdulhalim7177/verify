@extends('layouts.admin')

@section('content')
<div class="container d-flex align-items-center justify-content-center min-vh-100 ">
    <div class="card shadow p-5 mt-4" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4">Admin Login</h2>
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="mb-4 p-2">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus>
            </div>
            <div class="mb-4 p-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4 p-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <a href="#" class="text-decoration-none">Forgot password?</a>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>
<!-- <div class="container d-flex align-items-center justify-content-center min-vh-100 bg-light">
    <div class="card shadow-sm w-100" style="max-width: 400px;">
        <div class="card-body p-4">
            <h2 class="card-title text-center mb-4">Admin Login</h2>
            <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <a href="#" class="text-decoration-none">Forgot password?</a>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
</div> -->
@endsection