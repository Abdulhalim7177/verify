@extends('layouts.admin')

@section('content')
<div class="container px-4 py-4">
    <!-- Filters Card -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header  border-bottom d-flex justify-content-between align-items-center p-4">
                    <h3 class="m-0 fw-bold text-dark"><i class="fas fa-filter text-primary me-2"></i>Filter Invitations</h3>
                    <button class="btn btn-sm btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#filterCollapse" aria-expanded="true">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="card-body collapse show px-4 pt-3 pb-4" id="filterCollapse">
                    <form method="GET">
                        <div class="row g-4">
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <select name="status" class="form-select border-2" id="statusSelect">
                                        <option value="">All Statuses</option>
                                        <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    <label for="statusSelect" class="text-muted small">Status</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <select name="user_id" class="form-select border-2" id="userSelect">
                                        <option value="">All Users</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}" {{ request('user_id') == $user->id ? 'selected' : '' }}>
                                                {{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="userSelect" class="text-muted small">User</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" name="date_range" class="form-control border-2 daterange" 
                                        id="dateRange" value="{{ request('date_range') }}" autocomplete="off">
                                    <label for="dateRange" class="text-muted small">Date Range</label>
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary w-100 py-3 d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search me-2"></i> Apply
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics Cards -->
    <div class="row mb-4 g-4">
        <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-3 h-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <span class="text-muted small text-uppercase fw-semibold">Total Invitations</span>
                            <h2 class="mt-2 mb-0 fw-bold">{{ $analytics['total'] }}</h2>
                        </div>
                        <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-flex align-items-center justify-content-center">
                            <i class="fas fa-ticket-alt text-primary fa-lg"></i>
                        </div>
                    </div>
                    <div class="progress mt-4" style="height: 6px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-3 h-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <span class="text-muted small text-uppercase fw-semibold">Active</span>
                            <h2 class="mt-2 mb-0 fw-bold">{{ $analytics['active'] }}</h2>
                        </div>
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-flex align-items-center justify-content-center">
                            <i class="fas fa-check-circle text-success fa-lg"></i>
                        </div>
                    </div>
                    <div class="progress mt-4" style="height: 6px;">
                        <div class="progress-bar bg-success" role="progressbar" 
                            style="width: {{ $analytics['total'] > 0 ? ($analytics['active'] / $analytics['total'] * 100) : 0 }}%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-3 h-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <span class="text-muted small text-uppercase fw-semibold">Expired</span>
                            <h2 class="mt-2 mb-0 fw-bold">{{ $analytics['expired'] }}</h2>
                        </div>
                        <div class="rounded-circle bg-danger bg-opacity-10 p-3 d-flex align-items-center justify-content-center">
                            <i class="fas fa-clock text-danger fa-lg"></i>
                        </div>
                    </div>
                    <div class="progress mt-4" style="height: 6px;">
                        <div class="progress-bar bg-danger" role="progressbar" 
                            style="width: {{ $analytics['total'] > 0 ? ($analytics['expired'] / $analytics['total'] * 100) : 0 }}%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Active Invitations Table -->
    <div class="container card border-0 shadow-sm rounded-3 mb-4">
        <div class="card-header border-bottom py-4 px-4 d-flex justify-content-between align-items-center">
            <h4 class="m-0 fw-bold text-dark">
                <i class="fas fa-check-circle text-success me-3 fa-lg"></i>{{ __('Active Invitations') }}
            </h4>
            <button class="btn btn-sm btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#activeTableCollapse" aria-expanded="true">
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <div class="card-body px-0 pb-0 mb-5 collapse show" id="activeTableCollapse">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="border-0 ps-4 py-3 text-uppercase small fw-semibold">{{ __('Guest Name') }}</th>
                            <th class="border-0 py-3 text-uppercase small fw-semibold">{{ __('Description') }}</th>
                            <th class="border-0 py-3 text-uppercase small fw-semibold">{{ __('Expire At') }}</th>
                            <th class="border-0 text-end pe-4 py-3 text-uppercase small fw-semibold">{{ __('Actions') }}</th>
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
                                <tr class="border-top">
                                    <td class="ps-4 py-3 fw-medium">{{ $invitation->guest_name }}</td>
                                    <td class="py-3 text-muted">{{ $invitation->description }}</td>
                                    <td class="py-3">
                                        <div class="d-flex align-items-center">
                                            <i class="far fa-calendar-alt text-muted me-2"></i>
                                            {{ $expireDate->format('M d, Y - H:i') }}
                                            @if($diff <= 20 && $diff > 0)
                                                <span class="badge bg-warning text-dark ms-2 px-2 py-1 rounded-pill">Expires soon</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="text-end pe-4 py-3">
                                        <div class="btn-group">
                                            <a href="{{ route('invitations.share', $invitation->id) }}" class="btn btn-sm btn-outline-primary rounded-2 px-3">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                            <a href="{{ route('invitations.edit', $invitation->id) }}" class="btn btn-sm btn-outline-secondary rounded-2 px-3">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-outline-info rounded-2 px-3" data-bs-toggle="modal" data-bs-target="#viewInvitationModal{{ $invitation->id }}">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <form action="{{ route('invitations.destroy', $invitation->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger rounded-2 px-3" 
                                                    onclick="return confirm('Are you sure you want to delete this invitation?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                <!-- View Invitation Modal -->
                                <div class="modal fade" id="viewInvitationModal{{ $invitation->id }}" tabindex="-1" aria-labelledby="viewInvitationModalLabel{{ $invitation->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewInvitationModalLabel{{ $invitation->id }}">{{ __('Invitation Details') }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>{{ __('Guest Name:') }}</strong> {{ $invitation->guest_name }}</p>
                                                <p><strong>{{ __('Description:') }}</strong> {{ $invitation->description }}</p>
                                                <p><strong>{{ __('Expire At:') }}</strong> {{ $expireDate->format('M d, Y - H:i') }}</p>
                                                <p><strong>{{ __('Created At:') }}</strong> {{ $invitation->created_at->format('M d, Y - H:i') }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        
                        @if(!$hasActiveInvitations)
                            <tr>
                                <td colspan="4" class="text-center py-5 text-muted">
                                    <i class="fas fa-inbox fa-2x mb-3 d-block opacity-50"></i>
                                    {{ __('No active invitations found') }}
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Expired Invitations Table -->
    <div class="container card border-0 shadow-sm rounded-3">
        <div class="card-header border-bottom py-4 px-4 d-flex justify-content-between align-items-center">
            <h4 class="m-0 fw-bold text-dark">
                <i class="fas fa-clock text-danger me-3 fa-lg"></i>{{ __('Expired Invitations') }}
            </h4>
            <button class="btn btn-sm btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#expiredTableCollapse" aria-expanded="true">
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <div class="card-body px-0 pb-0 collapse show" id="expiredTableCollapse">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="border-0 ps-4 py-3 text-uppercase small fw-semibold">{{ __('Guest Name') }}</th>
                            <th class="border-0 py-3 text-uppercase small fw-semibold">{{ __('Description') }}</th>
                            <th class="border-0 py-3 text-uppercase small fw-semibold">{{ __('Expired At') }}</th>
                            <th class="border-0 text-end pe-4 py-3 text-uppercase small fw-semibold">{{ __('Actions') }}</th>
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
                                <tr class="border-top text-muted">
                                    <td class="ps-4 py-3">{{ $invitation->guest_name }}</td>
                                    <td class="py-3">{{ $invitation->description }}</td>
                                    <td class="py-3">
                                        <div class="d-flex align-items-center">
                                            <i class="far fa-calendar-alt me-2"></i>
                                            {{ $expireDate->format('M d, Y - H:i') }}
                                            <span class="badge bg-danger text-white ms-2 px-2 py-1 rounded-pill">Expired</span>
                                        </div>
                                    </td>
                                    <td class="text-end pe-4 py-3">
                                        <div class="btn-group">
                                            <form action="{{ route('invitations.destroy', $invitation->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger rounded-2 px-3" 
                                                    onclick="return confirm('Are you sure you want to delete this invitation?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        
                        @if(!$hasExpiredInvitations)
                            <tr>
                                <td colspan="4" class="text-center py-5 text-muted">
                                    <i class="fas fa-check-circle fa-2x mb-3 d-block opacity-50"></i>
                                    {{ __('No expired invitations found') }}
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

