@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="p-2 alert alert-warning">
        <h2 class="p-4 text-center">Available Plans</h2>
        <div class="row px-2">
            @foreach($plans as $plan)
            <div class="col-md-4">
                <div class="card mt-3">
                    <div class="fw-bold text-center py-5"><h2> {{ $plan->name }}</h2></div>
                    <div class="card-body border-dark shadow-sm">
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
</div>
@endsection