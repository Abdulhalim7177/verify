@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Invitation') }}</div>

                    <div class="card-body">
                        <form action="{{ route('invitations.update', $invitation->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="guest_name">{{ __('Guest Name') }}</label>
                                <input type="text" name="guest_name" id="guest_name" class="form-control"
                                    value="{{ $invitation->guest_name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="guest_phone">{{ __('Guest Phone') }}</label>
                                <input type="text" name="guest_phone" id="guest_phone" class="form-control"
                                    value="{{ $invitation->guest_phone }}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">{{ __('Description') }}</label>
                                <textarea name="description" id="description" class="form-control" rows="3" required>{{ $invitation->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="date">{{ __('Date') }}</label>
                                <input type="date" name="date" id="date" class="form-control"
                                    value="{{ $invitation->date }}" required>
                            </div>  @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        

                            <div class="form-group">
                                <label for="time">{{ __('Time') }}</label>
                                <input type="time" name="time" id="time" class="form-control"
                                    value="{{ $invitation->time }}" required>
                            </div>

                            <div class="form-group">
                                <label for="status">{{ __('Status') }}</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="active" {{ $invitation->status === 'active' ? 'selected' : '' }}>
                                        {{ __('Active') }}</option>
                                    <option value="inactive" {{ $invitation->status === 'inactive' ? 'selected' : '' }}>
                                        {{ __('Inactive') }}</option>
                                </select>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">{{ __('Update Invitation') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
