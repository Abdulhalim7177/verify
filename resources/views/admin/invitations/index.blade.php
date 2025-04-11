@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-filter"></i> Filters</h4>
                </div>
                <div class="card-body">
                    <form method="GET">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="">All Statuses</option>
                                    <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>User</label>
                                <select name="user_id" class="form-control">
                                    <option value="">All Users</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ request('user_id') == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Date Range</label>
                                <input type="text" name="date_range" class="form-control daterange" 
                                       value="{{ request('date_range') }}" autocomplete="off">
                            </div>
                            <div class="col-md-2 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="fas fa-search"></i> Filter
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics Cards -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body text-center">
                    <h5>Total Invitations</h5>
                    <h2>{{ $analytics['total'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body text-center">
                    <h5>Active</h5>
                    <h2>{{ $analytics['active'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white">
                <div class="card-body text-center">
                    <h5>Today</h5>
                    <h2>{{ $analytics['today'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-info text-white">
                <div class="card-body text-center">
                    <h5>Upcoming</h5>
                    <h2>{{ $analytics['upcoming'] }}</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Invitations Table -->
    <div class="card">
        <div class="card-header">
            <h3>All Invitations</h3>
        </div>
        
        <div class="card-body">
            @if($invitations->isEmpty())
                <div class="alert alert-info">No invitations found matching your filters.</div>
            @else
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Host</th>
                            <th>Guest</th>
                            <th>Event Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($invitations as $invitation)
                        <tr>
                            <td>{{ $invitation->user->name }}</td>
                            <td>{{ $invitation->guest_name }}</td>
                            <td>{{ \Carbon\Carbon::parse($invitation->date)->format('M d, Y') }} at {{ \Carbon\Carbon::parse($invitation->time)->format('h:i A') }}</td>
                            <td>
                                <span class="badge badge-{{ $invitation->status == 'active' ? 'success' : 'danger' }}">
                                    {{ ucfirst($invitation->status) }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('admin.invitations.show', $invitation) }}" 
                                   class="btn btn-sm btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                
                                <form action="{{ route('admin.invitations.regenerate-qr', $invitation) }}" 
                                      method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-warning" 
                                            title="Regenerate QR">
                                        <i class="fas fa-qrcode"></i>
                                    </button>
                                </form>
                                
                                <form action="{{ route('admin.invitations.destroy', $invitation) }}" 
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Delete this invitation?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $invitations->appends(request()->query())->links() }}
            @endif
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
$(function() {
    $('.daterange').daterangepicker({
        opens: 'right',
        autoUpdateInput: false,
        locale: {
            cancelLabel: 'Clear',
            format: 'YYYY-MM-DD'
        }
    });

    $('.daterange').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
    });

    $('.daterange').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
});
</script>
@endpush