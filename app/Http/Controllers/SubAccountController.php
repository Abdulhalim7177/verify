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
            'name' => 'required|string',
            'email' => 'nullable|email',
            'relationship' => 'required'
        ]);

        auth()->user()->subAccounts()->create($request->only('name', 'email', 'relationship'));

        return redirect()->route('subaccounts.index')->with('success', 'Sub-account added.');
    }

    public function destroy(SubAccount $subAccount)
    {
        if ($subAccount->user_id !== auth()->id()) abort(403);
        $subAccount->delete();
        return back()->with('success', 'Sub-account removed.');
    }
}
