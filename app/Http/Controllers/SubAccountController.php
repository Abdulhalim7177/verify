<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SubAccount;
use Illuminate\Http\Request;

class SubAccountController extends Controller
{
    public function index()
    {
        $subAccounts = auth()->user()->subAccounts;
        return view('subaccounts.index', compact('subAccounts'));
    }

    public function create()
    {
        return view('subaccounts.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'relationship' => 'required'
        ]);

        // 1. Create user in the users table
        $subUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_sub_account' => true,
        ]);

        // 2. Create sub-account link
        auth()->user()->subAccounts()->create([
            'name' => $request->name,
            'email' => $request->email,
            'relationship' => $request->relationship,
        ]);

        return redirect()->route('subaccounts.index')->with('success', 'Sub-account created successfully.');
    }


    public function destroy(SubAccount $subAccount)
    {
        if ($subAccount->user_id !== auth()->id()) abort(403);
        $subAccount->delete();
        return back()->with('success', 'Sub-account removed.');
    }
}
