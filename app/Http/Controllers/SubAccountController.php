<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubAccount;

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
            'name' => 'required',
            'email' => 'nullable|email|unique:users,email',
            'relationship' => 'required',
        ]);
    
        $password = \Str::random(6); // random PIN/password
    
        // Create user account for login
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($password),
            'is_sub_account' => true,
        ]);
    
        // Link to main user in sub_accounts table
        auth()->user()->subAccounts()->create([
            'name' => $request->name,
            'email' => $request->email,
            'relationship' => $request->relationship,
        ]);
    
        // OPTIONAL: email parent with PIN for login
        // Mail::to(auth()->user()->email)->send(new SubAccountCreated($user, $password));
    
        return redirect()->route('subaccounts.index')->with('success', 'Sub-account created. Password: ' . $password);
    }
    
    public function destroy(SubAccount $subAccount)
    {
        if ($subAccount->user_id !== auth()->id()) abort(403);
        $subAccount->delete();
        return back()->with('success', 'Sub-account removed.');
    }
}
