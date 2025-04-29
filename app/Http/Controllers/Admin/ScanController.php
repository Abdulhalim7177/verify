<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScanController extends Controller
{
    public function index()
    {
        $logs = \App\Models\ScanLog::with('invitation')
            ->orderByDesc('scanned_at')
            ->paginate(10);
    
        return view('admin.scanlogs.index', compact('logs'));
    }
    
        
}
