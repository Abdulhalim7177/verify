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

                    <h4>{{ __('Active Invitations') }}</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>{{ __('Guest Name') }}</th>
                                <th>{{ __('Description') }}</th>
                                <th>{{ __('Expire At') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invitations->where('status', 'active') as $invitation)
                                <tr>
                                    <td>{{ $invitation->guest_name }}</td>
                                    <td>{{ $invitation->description }}</td>
                                    <td>{{ $invitation->expire_at }}</td>
                                    <td>{{ ucfirst($invitation->status) }}</td>
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
                            @endforeach
                        </tbody>
                    </table>

                    <h4>{{ __('Inactive Invitations') }}</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>{{ __('Guest Name') }}</th>
                                <th>{{ __('Description') }}</th>
                                <th>{{ __('Expire At') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invitations->where('status', 'inactive') as $invitation)
                                <tr>
                                    <td>{{ $invitation->guest_name }}</td>
                                    <td>{{ $invitation->description }}</td>
                                    <td>{{ $invitation->expire_at }}</td>
                                    <td>{{ ucfirst($invitation->status) }}</td>
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
