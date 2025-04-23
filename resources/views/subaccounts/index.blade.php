@extends('layouts.app')

@section('content')
<div class="container">
    <h2>My Family Sub-Accounts</h2>
    <a href="{{ route('subaccounts.create') }}" class="btn btn-primary mb-3">Add Sub-Account</a>

    <table class="table">
        <thead>
            <tr><th>Name</th><th>Email</th><th>Relationship</th><th>Action</th></tr>
        </thead>
        <tbody>
            @forelse ($subAccounts as $sub)
                <tr>
                    <td>{{ $sub->name }}</td>
                    <td>{{ $sub->email ?? '—' }}</td>
                    <td>{{ ucfirst($sub->relationship) }}</td>
                    <td>
                        <form method="POST" action="{{ route('subaccounts.destroy', $sub) }}">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Remove sub-account?')">Remove</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4">No sub-accounts yet.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
