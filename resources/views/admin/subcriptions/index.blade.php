@extends('layouts.admin') {{-- or your actual admin layout --}}

@section('content')
<div class="container">
    <h2>All Subscriptions</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>User</th><th>Plan</th><th>Status</th><th>Start</th><th>End</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($subscriptions as $sub)
                <tr>
                    <td>{{ $sub->user->name }}</td>
                    <td>{{ $sub->plan->name }}</td>
                    <td>{{ ucfirst($sub->status) }}</td>
                    <td>{{ $sub->starts_at }}</td>
                    <td>{{ $sub->ends_at }}</td>
                </tr>
            @empty
                <tr><td colspan="5">No subscriptions found.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $subscriptions->links() }}
</div>
@endsection
