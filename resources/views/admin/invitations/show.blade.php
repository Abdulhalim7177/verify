@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Invitation Details</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h4>Host Information</h4>
                    <p><strong>Name:</strong> {{ $invitation->user->name }}</p>
                    <p><strong>Email:</strong> {{ $invitation->user->email }}</p>
                    <p><strong>Phone:</strong> {{ $invitation->user->phone }}</p>
                </div>
                <div class="col-md-6">
                    <h4>Guest Information</h4>
                    <p><strong>Name:</strong> {{ $invitation->guest_name }}</p>
                    <p><strong>Phone:</strong> {{ $invitation->guest_phone }}</p>
                    <p><strong>Event:</strong> {{ $invitation->description }}</p>
                    <p><strong>Date:</strong> {{ $invitation->date->format('M d, Y') }} at {{ $invitation->time }}</p>
                    <p>
                        <strong>Status:</strong> 
                        <span class="badge badge-{{ $invitation->status == 'active' ? 'success' : 'danger' }}">
                            {{ ucfirst($invitation->status) }}
                        </span>
                    </p>
                </div>
            </div>

            <hr>

            <div class="text-center">
                @if($invitation->qrcode)
                    <h4>QR Code</h4>
                    <img src="{{ asset('storage/' . $invitation->qrcode) }}" alt="QR Code" class="img-fluid" style="max-width: 200px;">
                    <div class="mt-3">
                        <form action="{{ route('admin.invitations.regenerate-qr', $invitation) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-warning">Regenerate QR</button>
                        </form>
                    </div>
                @else
                    <div class="alert alert-warning">No QR code generated yet</div>
                    <form action="{{ route('admin.invitations.regenerate-qr', $invitation) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Generate QR Code</button>
                    </form>
                @endif
            </div>

            <div class="mt-4">
                <form action="{{ route('admin.invitations.update', $invitation) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="active" {{ $invitation->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $invitation->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Status</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection