<?php

namespace App\Http\Controllers;

use App\Models\Line3;
use App\Models\dbflange;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class Line3Controller extends Controller
{
    public function index(): View
    {
        $dbflanges = dbflange::where('LINE', 'LINE 3')->paginate(10);
        return view('input.line3', compact('dbflanges'));
    }


    public function create(): View
    {
        return view('line3.create');
    }

    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'PartNumber' => 'required',
            'FLANGENON' => 'required|integer',
            'LINE' => 'required',
            'DC NUMBER' => 'required|integer',
        ]);

        Line3::create($request->all());

        return redirect()->route('line3.index')->with('success', 'Data Line3 berhasil ditambahkan.');
    }

    public function show(Line3 $line3): View
    {
        return view('line3.show', compact('line3'));
    }

    public function edit(Line3 $line3): View
    {
        return view('line3.edit', compact('line3'));
    }

    public function update(Request $request, Line3 $line3): RedirectResponse
    {
        // Validasi data jika diperlukan
        $request->validate([
            'PartNumber' => 'required',
            'FLANGENON' => 'required|integer',
            'LINE' => 'required',
            'DC NUMBER' => 'required|integer',
        ]);

        $line3->update($request->all());

        return redirect()->route('line3.index')->with('success', 'Data Line3 berhasil diperbarui.');
    }

    public function destroy(Line3 $line3): RedirectResponse
    {
        // Hapus data
        $line3->delete();

        return redirect()->route('line3.index')->with('success', 'Data Line3 berhasil dihapus.');
    }
}
