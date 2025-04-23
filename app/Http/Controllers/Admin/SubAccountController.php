<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubAccount;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubAccountController extends Controller
{

    public function index()
    {
        $subAccounts = SubAccount::with('user')->latest()->get();
        return view('admin.subaccounts.index', compact('subAccounts'));
    }
    
}
