@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">{{ __('My Invitations') }}</h3>
                    <a href="{{ route('invitations.create') }}" class="btn btn-light btn-sm">{{ __('Create New Invitation') }}</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Active Invitations -->
                    <h4 class="mt-4">{{ __('Active Invitations') }}</h4>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="">
                                <tr>
                                    <th>{{ __('Guest Name') }}</th>
                                    <th>{{ __('Description') }}</th>
                                    <th>{{ __('Expire At') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $hasActiveInvitations = false;
                                @endphp
                                @foreach ($invitations as $invitation)
                                    @php
                                        $expireDate = \Carbon\Carbon::parse($invitation->expire_at);
                                        $now = \Carbon\Carbon::now();
                                        $diff = $now->diffInMinutes($expireDate, false);
                                        $isExpired = $now->gt($expireDate);
                                    @endphp
                                    @if(!$isExpired)
                                        @php
                                            $hasActiveInvitations = true;
                                        @endphp
                                        <tr>
                                            <td>{{ $invitation->guest_name }}</td>
                                            <td>{{ $invitation->description }}</td>
                                            <td>
                                                {{ $invitation->expire_at }}
                                                @if($diff <= 20 && $diff > 0)
                                                    <span class="badge bg-warning text-dark">{{ __('Expires soon') }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('invitations.edit', $invitation->id) }}" class="btn btn-sm btn-outline-warning">{{ __('Edit') }}</a>
                                                <form action="{{ route('invitations.destroy', $invitation->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('{{ __('Are you sure you want to delete this invitation?') }}')">{{ __('Delete') }}</button>
                                                </form>
                                                <a href="{{ route('invitations.share', $invitation->id) }}" class="btn btn-sm btn-outline-info">{{ __('Share') }}</a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                
                                @if(!$hasActiveInvitations)
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">{{ __('No active invitations found') }}</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <!-- Expired Invitations -->
                    <h4 class="mt-5">{{ __('Expired Invitations') }}</h4>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="">
                                <tr>
                                    <th>{{ __('Guest Name') }}</th>
                                    <th>{{ __('Description') }}</th>
                                    <th>{{ __('Expire At') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $hasExpiredInvitations = false;
                                @endphp
                                @foreach ($invitations as $invitation)
                                    @php
                                        $expireDate = \Carbon\Carbon::parse($invitation->expire_at);
                                        $now = \Carbon\Carbon::now();
                                        $isExpired = $now->gt($expireDate);
                                    @endphp
                                    @if($isExpired)
                                        @php
                                            $hasExpiredInvitations = true;
                                        @endphp
                                        <tr>
                                            <td>{{ $invitation->guest_name }}</td>
                                            <td>{{ $invitation->description }}</td>
                                            <td>
                                                {{ $invitation->expire_at }}
                                                <span class="badge bg-danger">{{ __('Expired') }}</span>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                
                                @if(!$hasExpiredInvitations)
                                    <tr>
                                        <td colspan="3" class="text-center text-muted">{{ __('No expired invitations found') }}</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
