<?php

namespace App\Http\Controllers;

use App\Models\Line2;
use App\Models\dbflange;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class Line2Controller extends Controller
{
    public function index(): View
    {
        $dbflanges = dbflange::where('LINE', 'LINE 2')->paginate(10);
        return view('input.line2', compact('dbflanges'));
    }


    public function create(): View
    {
        return view('line2.create');
    }

    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'PartNumber' => 'required',
            'FLANGENON' => 'required|integer',
            'LINE' => 'required',
            'DC NUMBER' => 'required|integer',
        ]);

        Line2::create($request->all());

        return redirect()->route('line2.index')->with('success', 'Data Line2 berhasil ditambahkan.');
    }

    public function show(Line2 $dbflange): View
    {
        return view('line2.show', compact('dbflanges'));
    }

    public function edit(Line2 $dbflange): View
    {
        return view('line2.edit', compact('dbflanges'));
    }

    public function update(Request $request, Line2 $dbflange): RedirectResponse
    {

        $request->validate([    
            'PartNumber' => 'required',
            'FLANGENON' => 'required|integer',
            'LINE' => 'required',
            'DC NUMBER' => 'required|integer',
        ]);

        $dbflange->update($request->all());

        return redirect()->route('line2.index')->with('success', 'Data Line2 berhasil diperbarui.');
    }

    public function destroy(Line2 $dbflange): RedirectResponse
    {
        $dbflange->delete();

        return redirect()->route('line2.index')->with('success', 'Data Line2 berhasil dihapus.');
    }
}
