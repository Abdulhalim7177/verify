@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container card p-5 border-0 shadow-sm mb-4">
        <h1 class="mb-4">Create Sub-Account</h1>
        <p class="text-muted">Create a sub-account for a family member. This account will be linked to your main account.</p>

        <h2>Add Sub-Account</h2>
        <form method="POST" action="{{ route('subaccounts.store') }}">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <!-- Add Password Field -->
            <div class="mb-3">
                <label>Password (used for login)</label>
                <input type="password" name="password" class="form-control" required>
            </div>


            <div class="mb-3">
                <label>Email (used for login)</label>
                <input type="email" name="email" class="form-control" required>
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
</div>
@endsection