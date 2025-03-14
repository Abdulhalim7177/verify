@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Invitation') }}</div>

                <div class="card-body">
                    <!-- Display success message -->
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        <!-- Show share button if invitation is created -->
                        @if (session('invitation_id'))
                            <div class="text-center">
                                <a href="{{ route('invitations.share', session('invitation_id')) }}" class="btn btn-info">{{ __('Share Invitation') }}</a>
                            </div>
                        @endif
                    @endif

                    <!-- Invitation Creation Form -->
                    <form action="{{ route('invitations.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="guest_name">{{ __('Guest Name') }}</label>
                            <input type="text" name="guest_name" id="guest_name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="guest_phone">{{ __('Guest Phone') }}</label>
                            <input type="text" name="guest_phone" id="guest_phone" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">{{ __('Date') }}</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="time">{{ __('Time') }}</label>
                            <input type="time" name="time" id="time" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="status">{{ __('Status') }}</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="active">{{ __('Active') }}</option>
                                <option value="inactive">{{ __('Inactive') }}</option>
                            </select>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">{{ __('Create Invitation') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection