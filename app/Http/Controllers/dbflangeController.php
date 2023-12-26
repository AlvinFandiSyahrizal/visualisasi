<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use App\Models\dbflange;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class dbflangeController extends Controller
{
    public function index(): View
    {

        $dbflanges = dbflange::orderBy('asc')->paginate(50);
        return view('input.line2', compact('dbflange'));
    }
}
