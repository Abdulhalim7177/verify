@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="mb-3">All User Subscriptions</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>User</th>
                <th>Plan</th>
                <th>Status</th>
                <th>Start</th>
                <th>End</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($subscriptions as $sub)
                <tr>
                    <td>{{ $sub->user->name }}</td>
                    <td>{{ $sub->plan->name }}</td>
                    <td>
                        <span class="badge bg-{{ $sub->status === 'active' ? 'success' : 'secondary' }}">
                            {{ ucfirst($sub->status) }}
                        </span>
                    </td>
                    <td>{{ $sub->starts_at }}</td>
                    <td>{{ $sub->ends_at }}</td>
                    <td>
                        @if($sub->status === 'active')
                            <form method="POST" action="{{ route('admin.subscriptions.deactivate', $sub) }}">
                                @csrf
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Deactivate this subscription?')">
                                    Deactivate
                                </button>
                            </form>
                        @else
                            <em>N/A</em>
                        @endif
                    </td>
                </tr>
            @empty
                <tr><td colspan="6">No subscriptions found.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $subscriptions->links() }}
</div>
@endsection
