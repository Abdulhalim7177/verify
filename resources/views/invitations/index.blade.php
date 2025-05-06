@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">My Invitations</h3>
                    <a href="{{ route('invitations.create') }}" class="btn btn-light btn-sm">Create New Invitation</a>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- === Active Invitations Toggle === --}}
                    <h4 class="mt-4">
                        <button class="btn btn-outline-dark btn-sm" data-bs-toggle="collapse" data-bs-target="#activeInvites">Toggle Active Invitations</button>
                    </h4>
                    <div class="collapse show" id="activeInvites">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>Guest Name</th>
                                        <th>Description</th>
                                        <th>Expires</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $hasOwnActive = false; @endphp
                                    @foreach ($ownInvitations as $invitation)
                                        @php
                                            $expired = \Carbon\Carbon::parse($invitation->expire_at)->isPast();
                                            if (!$expired) $hasOwnActive = true;
                                        @endphp
                                        @if (!$expired)
                                            <tr>
                                                <td>{{ $invitation->guest_name }}</td>
                                                <td>{{ $invitation->description }}</td>
                                                <td>{{ $invitation->expire_at }}</td>
                                                <td>
                                                    @if ($invitation->is_shared)
                                                        <span class="badge badge-light-info">Shared</span>
                                                    @else
                                                        <span class="badge bg-light-success">Active</span>
                                                    @endif
                                                </td>
                                                <td class="actions">
                                                    @if (!$invitation->is_shared)
                                                        <a href="{{ route('invitations.edit', $invitation->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                        <form action="{{ route('invitations.destroy', $invitation->id) }}" method="POST" class="d-inline">
                                                            @csrf @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                        </form>
                                                        <a href="{{ route('invitations.share', $invitation->qrcodetoken) }}"
                                                           class="btn btn-sm btn-info share-btn"
                                                           data-id="{{ $invitation->id }}">Share</a>
                                                    @else
                                                        <a href="{{ route('invitations.share', ['token' => $invitation->qrcodetoken]) }}"
                                                           class="btn btn-sm btn-info">View Shared</a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    @if (!$hasOwnActive)
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">No active invitations found</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- === Expired Invitations Toggle === --}}
                    <h4 class="mt-5">
                        <button class="btn btn-outline-dark btn-sm" data-bs-toggle="collapse" data-bs-target="#expiredInvites">Toggle Expired Invitations</button>
                    </h4>
                    <div class="collapse" id="expiredInvites">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>Guest Name</th>
                                        <th>Description</th>
                                        <th>Expired At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $hasOwnExpired = false; @endphp
                                    @foreach ($ownInvitations as $invitation)
                                        @php $expired = \Carbon\Carbon::parse($invitation->expire_at)->isPast(); @endphp
                                        @if ($expired)
                                            @php $hasOwnExpired = true; @endphp
                                            <tr>
                                                <td>{{ $invitation->guest_name }}</td>
                                                <td>{{ $invitation->description }}</td>
                                                <td>{{ $invitation->expire_at }} <span class="badge bg-danger text-white py-2 m-2">Expired</span></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    @if (!$hasOwnExpired)
                                        <tr>
                                            <td colspan="3" class="text-center text-muted">No expired invitations</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- === Sub-Account Invitations Toggle === --}}
                    @unless(auth()->user()->is_sub_account)
                        <h4 class="mt-5">
                            <button class="btn btn-outline-dark btn-sm" data-bs-toggle="collapse" data-bs-target="#subInvites">Toggle Sub-Account Invitations</button>
                        </h4>
                        <div class="collapse" id="subInvites">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead>
                                        <tr>
                                            <th>Guest Name</th>
                                            <th>Description</th>
                                            <th>Expires</th>
                                            <th>Created By</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($subInvitations as $subInvite)
                                            <tr>
                                                <td>{{ $subInvite->guest_name }}</td>
                                                <td>{{ $subInvite->description }}</td>
                                                <td>
                                                    {{ $subInvite->expire_at }}
                                                    @if (\Carbon\Carbon::parse($subInvite->expire_at)->isPast())
                                                        <span class="badge bg-danger">Expired</span>
                                                    @else
                                                        <span class="badge bg-success">Active</span>
                                                    @endif
                                                </td>
                                                <td><span class="badge bg-info">{{ $subInvite->email }}</span></td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center text-muted">No sub-account invitations</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endunless
                </div>
            </div>
        </div>
    </div>
</div>

@endsection