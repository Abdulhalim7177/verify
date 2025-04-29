<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use App\Models\ScanLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScanHistoryController extends Controller
{

  // ScanHistoryController.php

public function index()
{
    $logs = \App\Models\ScanLog::with('invitation')
        ->orderByDesc('scanned_at')
        ->paginate(10);

    return view('security.scanlogs.index', compact('logs'));
}

    
    
}
