@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h5 mb-0">Test Invitation Token</h2>
                    </div>
                    <div class="card-body">
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
                                <label for="token" class="form-label">Token:</label>
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
        </div>
    </div>
@endsection
