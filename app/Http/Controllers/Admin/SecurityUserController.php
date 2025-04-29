<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Security;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SecurityUserController extends Controller
{
    public function index()
    {
        $securities = Security::latest()->paginate(20);
        return view('admin.securities.index', compact('securities'));
    }

    public function create()
    {
        return view('admin.securities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:securities',
            'phone'    => 'required|string|max:20|unique:securities',
            'password' => 'required|string|min:6|confirmed',
        ]);

        Security::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.securities.index')->with('success', 'Security created successfully.');
    }

    public function edit(Security $security)
    {
        return view('admin.securities.edit', compact('security'));
    }

    public function update(Request $request, Security $security)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:securities,email,' . $security->id,
            'phone' => 'required|string|max:20|unique:securities,phone,' . $security->id,
        ]);

        $security->update($request->only('name', 'email', 'phone'));

        return redirect()->route('admin.securities.index')->with('success', 'Security updated.');
    }

    public function destroy(Security $security)
    {
        $security->delete();
        return back()->with('success', 'Security deleted.');
    }
}
