@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>All Transactions</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>User</th><th>Ref No</th><th>Amount</th><th>Status</th> <th>Payer</th><th>Paid At</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($transactions as $txn)
                <tr>
                    <td>{{ $txn->user->name }}</td>
                    <td>{{ $txn->transaction_ref }}</td>
                    <td>₦{{ number_format($txn->amount, 2) }}</td>
                    <td>{{ ucfirst($txn->status) }}</td>
                    <td>{{ $txn->paidBy?->name ?? $txn->user->name }}</td>
                    <td>{{ $txn->paid_at ?? '—' }}</td>
                </tr>
            @empty
                <tr><td colspan="5">No transactions found.</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $transactions->links() }}
</div>
@endsection
