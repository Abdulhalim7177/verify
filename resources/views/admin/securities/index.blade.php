@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Security Personnel</h2>
        <a href="{{ route('admin.securities.create') }}" class="btn btn-primary">Add New Security</a>
    </div>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card-body py-4">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                <thead>
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-50px pe-0 d-none d-md-table-cell">Id</th>
                        <th class="min-w-200px">Name</th>
                        <th class="min-w-125px d-none d-md-table-cell">Email</th>
                        <th class="min-w-125px d-none d-lg-table-cell">Phone</th>
                        <th class="text-end min-w-100px">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                    @forelse ($securities as $security)
                    <tr>
                        <td class="pe-0 d-none d-md-table-cell">{{ $security->id }}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $security->name }}</a>
                                </div>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell">{{ $security->email }}</td>
                        <td class="d-none d-lg-table-cell">
                            <div class="badge badge-light fw-bold">{{ $security->phone }}</div>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm btn-icon me-1" data-bs-toggle="modal" data-bs-target="#editSecurityModal-{{ $security->id }}" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#deleteSecurityModal-{{ $security->id }}" title="Delete">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editSecurityModal-{{ $security->id }}" tabindex="-1" aria-labelledby="editSecurityModalLabel-{{ $security->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <form action="{{ route('admin.securities.update', $security) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Security: {{ $security->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="name{{ $security->id }}" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name{{ $security->id }}" name="name" value="{{ $security->name }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email{{ $security->id }}" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email{{ $security->id }}" name="email" value="{{ $security->email }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone{{ $security->id }}" class="form-label">Phone</label>
                                            <input type="text" class="form-control" id="phone{{ $security->id }}" name="phone" value="{{ $security->phone }}" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="deleteSecurityModal-{{ $security->id }}" tabindex="-1" aria-labelledby="deleteSecurityModalLabel-{{ $security->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <form action="{{ route('admin.securities.destroy', $security) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete Confirmation</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete <strong>{{ $security->name }}</strong>?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">No security users found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>

    {{ $securities->links() }}
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection