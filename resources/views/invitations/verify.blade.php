@extends('layouts.security')

@section('content')
<div class="container mt-5" style="max-width: 700px;">
    <div class="shadow">
        <div class="alert alert-info text-start">
            <h1 class="card-title font-weight-bold mb-4 text-center">
                Provide Invitation Token
            </h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('invitations.web.verify') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="token" class="form-label"><strong>Token:</strong></label>
                    <input id="token" name="token" type="text"
                        class="form-control"
                        placeholder="Paste QR payload here">
                </div>
                <button type="submit"
                    class="btn btn-primary w-100">
                    Verify
                </button>
            </form>
        </div>
    </div>
</div>
@endsection