<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logging;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LoggingExport;

class LoggingController extends Controller
{
    public function index()
    {
        $logs = Logging::select('LOG_PROD.id', 'LOG_PROD.TIMESTAMP', 'LOG_PROD.DC CODE LINE 2 as DCCODELINE2', 'LOG_PROD.PART NO LINE 2 as PARTNOLINE2', 'dbflange2s.FLANGENON as FLANGENONLINE2', 'LOG_PROD.DC CODE LINE 3 as DCCODELINE3', 'LOG_PROD.PART NO LINE 3 as PARTNOLINE3', 'dbflange3s.FLANGENON as FLANGENONLINE3', 'LOG_PROD.DC CODE LINE 4 as DCCODELINE4', 'LOG_PROD.PART NO LINE 4 as PARTNOLINE4', 'dbflanges.FLANGENON as FLANGENONLINE4')
                       ->leftJoin('dbflange2s', 'LOG_PROD.DC CODE LINE 2', '=', 'dbflange2s.DCCODE')
                       ->leftJoin('dbflange3s', 'LOG_PROD.DC CODE LINE 3', '=', 'dbflange3s.DCCODE')
                       ->leftJoin('dbflanges', 'LOG_PROD.DC CODE LINE 4', '=', 'dbflanges.DCCODE')
                       ->orderBy('LOG_PROD.TIMESTAMP', 'desc')
                       ->get();

        return view('riwayat.logging', compact('logs'));
    }

    public function exportToExcel()
    {
        $logs = Logging::select('LOG_PROD.id', 'LOG_PROD.TIMESTAMP', 'LOG_PROD.DC CODE LINE 2 as DCCODELINE2', 'LOG_PROD.PART NO LINE 2 as PARTNOLINE2', 'dbflange2s.FLANGENON as FLANGENONLINE2', 'LOG_PROD.DC CODE LINE 3 as DCCODELINE3', 'LOG_PROD.PART NO LINE 3 as PARTNOLINE3', 'dbflange3s.FLANGENON as FLANGENONLINE3', 'LOG_PROD.DC CODE LINE 4 as DCCODELINE4', 'LOG_PROD.PART NO LINE 4 as PARTNOLINE4', 'dbflanges.FLANGENON as FLANGENONLINE4')
                       ->leftJoin('dbflange2s', 'LOG_PROD.DC CODE LINE 2', '=', 'dbflange2s.DCCODE')
                       ->leftJoin('dbflange3s', 'LOG_PROD.DC CODE LINE 3', '=', 'dbflange3s.DCCODE')
                       ->leftJoin('dbflanges', 'LOG_PROD.DC CODE LINE 4', '=', 'dbflanges.DCCODE')
                       ->orderBy('LOG_PROD.TIMESTAMP', 'desc')
                       ->get();

        return Excel::download(new LoggingExport($logs), 'logging_data.xlsx');
    }
}
