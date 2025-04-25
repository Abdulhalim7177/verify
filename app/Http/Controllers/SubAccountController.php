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
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_sub_account' => true, // ✅ mark as sub-account
        ]);


        // 2. Create sub-account link
        auth()->user()->subAccounts()->create([
            'name' => $request->name,
            'email' => $request->email,
            'relationship' => $request->relationship,
        ]);

        return redirect()->route('subaccounts.index')->with('success', 'Sub-account created successfully.');
    }

    public function update(Request $request, $id)
    {
        $sub = SubAccount::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'relationship' => 'required|string|max:50',
        ]);

        $sub->update($request->only('name', 'email', 'relationship'));

        return back()->with('success', 'Sub-account updated successfully.');
    }


    public function destroy($id)
    {
        $sub = SubAccount::findOrFail($id);
    
        // Ensure current user owns the subaccount
        if ($sub->user_id !== auth()->id()) {
            abort(403);
        }
    
        $sub->delete();
    
        return back()->with('success', 'Sub-account deleted.');
    }
    
}
