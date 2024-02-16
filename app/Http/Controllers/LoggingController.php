<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logging;

class LoggingController extends Controller
{
    public function index()
    {
        $logs = Logging::all();
        return view('riwayat.logging', compact('logs'));
    }
}
