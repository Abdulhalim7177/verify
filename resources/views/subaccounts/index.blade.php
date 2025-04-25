@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 fw-bold">My Family Sub-Accounts</h2>

    @unless(auth()->user()->is_sub_account)
    <a href="{{ route('subaccounts.create') }}" class="btn btn-primary">Add Sub-Account</a>
    @endunless

    <div class="table-responsive shadow-sm rounded">
        <table class="table table-hover align-middle mb-0">
            <thead>
                <tr class="text-uppercase fw-bold">
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Relationship</th>
                    <th class="px-4 py-3 text-end">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($subAccounts as $sub)
                <tr>
                    <td class="px-4 py-3">{{ $sub->name }}</td>
                    <td class="px-4 py-3">{{ $sub->email ?? '—' }}</td>
                    <td class="px-4 py-3">{{ ucfirst($sub->relationship) }}</td>
                    <td class="px-4 py-3 text-end">
                        <!-- Edit Button -->
                        <button class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#editModal{{ $sub->id }}">
                            Edit
                        </button>

                        <!-- Delete Button triggers modal -->
                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $sub->id }}">
                            Remove
                        </button>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal{{ $sub->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $sub->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <form method="POST" action="{{ route('subaccounts.destroy', $sub->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $sub->id }}">Remove Sub-Account</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete <strong>{{ $sub->name }}</strong> from your sub-accounts?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        @csrf
                        @method('DELETE')

                        </form>
                    </td>
                </tr>

                <!-- Modal for Editing -->
                <div class="modal fade" id="editModal{{ $sub->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $sub->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <form method="POST" action="{{ route('subaccounts.update', $sub->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel{{ $sub->id }}">Edit Sub-Account</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $sub->name }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ $sub->email }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Relationship</label>
                                        <input type="text" name="relationship" class="form-control" value="{{ $sub->relationship }}" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @empty
                <tr>
                    <td colspan="4" class="text-center text-muted py-4">No sub-accounts yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection