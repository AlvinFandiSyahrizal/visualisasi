<?php

namespace App\Http\Controllers;

use App\Models\line4;
use App\Models\dbflange;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class Line4Controller extends Controller
{
    public function index(): View
    {
        $dbflanges = dbflange::where('LINE', 'LINE 4')->paginate(10);
        return view('input.line4', compact('dbflanges'));
    }


    public function create(): View
    {
        return view('line4.create');
    }

    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'PartNumber' => 'required',
            'FLANGENON' => 'required|integer',
            'LINE' => 'required',
            'DC NUMBER' => 'required|integer',
        ]);

        Line4::create($request->all());

        return redirect()->route('line4.index')->with('success', 'Data Line4 berhasil ditambahkan.');
    }

    public function show(Line4 $line4): View
    {
        return view('line4.show', compact('line4'));
    }

    public function edit(Line4 $line4): View
    {
        return view('line4.edit', compact('line4'));
    }

    public function update(Request $request, Line4 $line4): RedirectResponse
    {
        // Validasi data jika diperlukan
        $request->validate([
            'PartNumber' => 'required',
            'FLANGENON' => 'required|integer',
            'LINE' => 'required',
            'DC NUMBER' => 'required|integer',
        ]);

        $line4->update($request->all());

        return redirect()->route('line4.index')->with('success', 'Data Line4 berhasil diperbarui.');
    }

    public function destroy(Line4 $line4): RedirectResponse
    {
        // Hapus data
        $line4->delete();

        return redirect()->route('line4.index')->with('success', 'Data Line4 berhasil dihapus.');
    }
}
