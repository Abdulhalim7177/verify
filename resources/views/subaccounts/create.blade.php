@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Sub-Account</h2>
    <form method="POST" action="{{ route('subaccounts.store') }}">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email (optional)</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label>Relationship</label>
            <select name="relationship" class="form-select">
                <option value="child">Child</option>
                <option value="spouse">Spouse</option>
                <option value="sibling">Sibling</option>
                <option value="parent">Parent</option>
                <option value="other" selected>Other</option>
            </select>
        </div>

        <button class="btn btn-success">Save</button>
    </form>
</div>
@endsection
