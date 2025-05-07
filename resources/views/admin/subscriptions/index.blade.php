@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>User Subscriptions</h2>
    </div>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Card-->
                <div class="card">
                    <div class="card-body py-4">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_subscriptions">
                                <thead>
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-200px">User</th>
                                        <th class="min-w-150px">Plan</th>
                                        <th class="min-w-100px">Status</th>
                                        <th class="min-w-150px">Start</th>
                                        <th class="min-w-150px">End</th>
                                        <th class="text-end min-w-100px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-semibold">
                                    @forelse ($subscriptions as $sub)
                                    <tr>
                                        <td>{{ $sub->user->name }}</td>
                                        <td>{{ $sub->plan->name }}</td>
                                        <td>
                                            <span class="badge badge-light-{{ $sub->status === 'active' ? 'success' : 'secondary' }}">
                                                {{ ucfirst($sub->status) }}
                                            </span>
                                        </td>
                                        <td>{{ $sub->starts_at }}</td>
                                        <td>{{ $sub->ends_at }}</td>
                                        <td class="text-end">
                                            @if($sub->status === 'active')
                                            <form method="POST" action="{{ route('admin.subscriptions.deactivate', $sub) }}" class="d-inline">
                                                @csrf
                                                <button class="btn btn-light btn-active-light-danger btn-sm" onclick="return confirm('Deactivate this subscription?')" title="Deactivate">
                                                    <i class="fas fa-ban"></i> Deactivate
                                                </button>
                                            </form>
                                            @else
                                            <em class="text-muted">N/A</em>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">No subscriptions found.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ $subscriptions->links() }}
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
