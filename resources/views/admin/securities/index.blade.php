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
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($securities as $security)
                    <tr>
                        <td>{{ $security->name }}</td>
                        <td>{{ $security->email }}</td>
                        <td>{{ $security->phone }}</td>
                        <td>{{ \Carbon\Carbon::parse($security->created_at)->format('d M, Y') }}</td>
                        <td class="text-end">
                            <a href="{{ route('admin.securities.edit', $security) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.securities.destroy', $security) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Are you sure you want to delete this security user?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
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
