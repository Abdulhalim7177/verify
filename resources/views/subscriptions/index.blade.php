@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Available Plans</h2>
    <div class="row">
        @foreach($plans as $plan)
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="card-header">{{ $plan->name }}</div>
                    <div class="card-body">
                        <p>₦{{ number_format($plan->price, 2) }} for {{ $plan->duration }} days</p>
                        <form action="{{ route('pay', $plan->id) }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-primary">Subscribe</button>
</form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
