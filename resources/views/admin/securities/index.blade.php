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

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($securities as $security)
                    <tr>
                        <td>{{ $security->name }}</td>
                        <td>{{ $security->email }}</td>
                        <td>{{ $security->phone }}</td>
                        <td>{{ \Carbon\Carbon::parse($security->created_at)->format('d M, Y') }}</td>
                        <td class="text-right">
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editSecurityModal-{{ $security->id }}">
                                Edit
                            </button>

                            <form action="{{ route('admin.securities.destroy', $security) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Are you sure you want to delete this security user?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>

                    <!-- Bootstrap 4 Modal -->
                    <div class="modal fade" id="editSecurityModal-{{ $security->id }}" tabindex="-1" role="dialog" aria-labelledby="editSecurityModalLabel-{{ $security->id }}" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <form action="{{ route('admin.securities.update', $security) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editSecurityModalLabel-{{ $security->id }}">Edit Security: {{ $security->name }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="name" class="form-control" required value="{{ old('name', $security->name) }}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" type="email" class="form-control" required value="{{ old('email', $security->email) }}">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="phone" class="form-control" required value="{{ old('phone', $security->phone) }}">
                                </div>
                              </div>

                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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

    {{ $securities->links() }}
</div>
@endsection
@section('scripts')

<!-- Bootstrap 4.6 JS + dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
