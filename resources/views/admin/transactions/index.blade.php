@extends('layouts.admin')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>All Sub-Accounts</h2>
    </div>
</div>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card">
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Ref No</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Payer</th>
                                    <th>Paid At</th>
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
                                <tr>
                                    <td colspan="5">No transactions found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


{{ $transactions->links() }}
</div>
@endsection