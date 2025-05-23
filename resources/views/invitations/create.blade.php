@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container card p-5  border-0 shadow-sm">

        <h1>Create Invitation</h1>
        <form action="{{ route('invitations.store') }}" method="POST">
        @csrf
        <div class="form-group p-2">
            <label for="guest_name">Guest Name</label>
            <input type="text" name="guest_name" id="guest_name" class="form-control" required>
        </div>
        <div class="form-group p-2">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>
        <!-- Hidden fields -->
        <input type="hidden" name="expire_at" value="{{ now()->addHour() }}">
        <input type="hidden" name="status" value="active">
        <button type="submit" class="btn btn-primary">Create Invitation</button>
    </form>
</div>
</div>
@endsection
