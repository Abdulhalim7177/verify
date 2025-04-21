@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>{{ __('My Invitations') }}</h3>
                    <a href="{{ route('invitations.create') }}" class="btn btn-primary float-right">{{ __('Create New Invitation') }}</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Active Invitations -->
                    <h4>{{ __('Active Invitations') }}</h4>
                    <table class="table table-bordered mb-5">
                        <thead>
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
                                                <span class="badge badge-warning">Expires soon</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('invitations.edit', $invitation->id) }}" class="btn btn-sm btn-warning">{{ __('Edit') }}</a>
                                            <form action="{{ route('invitations.destroy', $invitation->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this invitation?')">{{ __('Delete') }}</button>
                                            </form>
                                            <a href="{{ route('invitations.share', $invitation->id) }}" class="btn btn-sm btn-info">{{ __('Share') }}</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            
                            @if(!$hasActiveInvitations)
                                <tr>
                                    <td colspan="4" class="text-center">{{ __('No active invitations found') }}</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                    <!-- Expired Invitations -->
                    <h4>{{ __('Expired Invitations') }}</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>{{ __('Guest Name') }}</th>
                                <th>{{ __('Description') }}</th>
                                <th>{{ __('Expire At') }}</th>
                                <!-- <th>{{ __('Actions') }}</th>    -->
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
                                            <span class="badge badge-danger">Expired</span>
                                        </td>
                                        <!-- <td>
                                            <a href="{{ route('invitations.edit', $invitation->id) }}" class="btn btn-sm btn-warning">{{ __('Edit') }}</a>
                                            <form action="{{ route('invitations.destroy', $invitation->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this invitation?')">{{ __('Delete') }}</button>
                                            </form>
                                          
                                        </td> -->
                                    </tr>
                                @endif
                            @endforeach
                            
                            @if(!$hasExpiredInvitations)
                                <tr>
                                    <td colspan="4" class="text-center">{{ __('No expired invitations found') }}</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection