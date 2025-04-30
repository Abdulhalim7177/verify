@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="mb-4">Admin Dashboard</h2>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text display-6">{{ $totalUsers }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Total Transactions</h5>
                    <p class="card-text display-6">{{ $totalTransactions }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <h5 class="card-title">Active Subscriptions</h5>
                    <p class="card-text display-6">{{ $activeSubscriptions }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Invitations</h5>
                    <p class="card-text display-6">{{ $totalInvitations }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title">Total Revenue</h5>
                    <p class="card-text display-6">₦{{ number_format($totalRevenue, 2) }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Total Securities</h5>
                    <p class="card-text display-6">{{ $totalSecurities }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Total Scans </h5>
                    <p class="card-text display-6">{{ $scanLogs  }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5">
</div>

<hr class="my-4">

<button class="btn btn-outline-secondary mb-3" onclick="toggleRecent()">Toggle Recent Activity</button>

<div id="recentActivity" style="display: none;">
    <h3>Recent Subscriptions</h3>
    <!-- Subscriptions Table -->
    <table class="table table-striped">
        <thead>
            <tr><th>User</th><th>Plan</th><th>Status</th><th>Starts</th><th>Ends</th></tr>
        </thead>
        <tbody>
            @foreach ($recentSubscriptions as $s)
            <tr>
                <td>{{ $s->user->name }}</td>
                <td>{{ $s->plan->name }}</td>
                <td>{{ ucfirst($s->status) }}</td>
                <td>{{ \Carbon\Carbon::parse($s->starts_at)->format('d M, Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($s->ends_at)->format('d M, Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h3 class="mt-4">Recent Transactions</h3>
    <!-- Transactions Table -->
    <table class="table table-striped">
        <thead><tr><th>User</th><th>Reference</th><th>Amount</th><th>Paid At</th></tr></thead>
        <tbody>
            @foreach ($recentTransactions as $t)
            <tr>
                <td>{{ $t->user->name }}</td>
                <td>{{ $t->transaction_ref }}</td>
                <td>₦{{ number_format($t->amount, 2) }}</td>
                <td>{{ $t->paid_at ? \Carbon\Carbon::parse($t->paid_at)->format('d M, Y H:i') : '—' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection
<script>
    function toggleRecent() {
        const div = document.getElementById('recentActivity');
        div.style.display = (div.style.display === 'none') ? 'block' : 'none';
    }
</script>
