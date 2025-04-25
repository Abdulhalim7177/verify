@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 fw-bold">My Family Sub-Accounts</h2>

    <a href="{{ route('subaccounts.create') }}" class="btn btn-primary mb-3">
        Add Sub-Account
    </a>

    <div class="table-responsive shadow-sm rounded ">
        <table class="table table-hover align-middle mb-0">
            <thead>
                <tr class="text-uppercase fw-bold">
                    <th class="px-4 py-3" scope="col">Name</th>
                    <th class="px-4 py-3" scope="col">Email</th>
                    <th class="px-4 py-3" scope="col">Relationship</th>
                    <th class="px-4 py-3 text-end" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($subAccounts as $sub)
                    <tr>
                        <td class="px-4 py-3">{{ $sub->name }}</td>
                        <td class="px-4 py-3">{{ $sub->email ?? '—' }}</td>
                        <td class="px-4 py-3">{{ ucfirst($sub->relationship) }}</td>
                        <td class="px-4 py-3 text-end">
                            <form method="POST" action="{{ route('subaccounts.destroy', $sub) }}"
                                  onsubmit="return confirm('Remove sub-account?')"
                                  class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    Remove
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">
                            No sub-accounts yet.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
