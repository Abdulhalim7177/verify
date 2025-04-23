@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>All Sub-Accounts</h2>

    <table class="table table-striped">
        <thead>
            <tr><th>Name</th><th>Email</th><th>Relationship</th><th>Owner</th></tr>
        </thead>
        <tbody>
            @foreach ($subAccounts as $sub)
                <tr>
                    <td>{{ $sub->name }}</td>
                    <td>{{ $sub->email }}</td>
                    <td>{{ ucfirst($sub->relationship) }}</td>
                    <td>{{ $sub->user->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
