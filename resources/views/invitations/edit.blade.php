@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container card  p-5">

        <h1>Edit Invitation</h1>
        <form action="{{ route('invitations.update', $invitation->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="guest_name">Guest Name</label>
                <input type="text" name="guest_name" id="guest_name" class="form-control"
                    value="{{ $invitation->guest_name }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $invitation->description }}</textarea>
            </div>
            <!-- Hidden fields -->
            <input type="hidden" name="expire_at" value="{{ $invitation->expire_at }}">
            <input type="hidden" name="status" value="{{ $invitation->status }}">
            <button type="submit" class="btn btn-primary">Update Invitation</button>
        </form>
    </div>
</div>
@endsection