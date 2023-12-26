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
    public function index()
    {
        $line2s = dbflange::all();
        return view('input.line2', compact('line2s'));
    }

    public function create(): View
    {
        return view('line2.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validasi data jika diperlukan
        $request->validate([
            'PartNumber' => 'required',
            'FLANGENON' => 'required|integer',
            'LINE' => 'required',
            'DC NUMBER' => 'required|integer',
        ]);

        // Simpan data baru
        Line2::create($request->all());

        return redirect()->route('line2.index')->with('success', 'Data Line2 berhasil ditambahkan.');
    }

    public function show(Line2 $line2): View
    {
        return view('line2.show', compact('line2'));
    }

    public function edit(Line2 $line2): View
    {
        return view('line2.edit', compact('line2'));
    }

    public function update(Request $request, Line2 $line2): RedirectResponse
    {
        // Validasi data jika diperlukan
        $request->validate([
            'PartNumber' => 'required',
            'FLANGENON' => 'required|integer',
            'LINE' => 'required',
            'DC NUMBER' => 'required|integer',
        ]);

        // Perbarui data
        $line2->update($request->all());

        return redirect()->route('line2.index')->with('success', 'Data Line2 berhasil diperbarui.');
    }

    public function destroy(Line2 $line2): RedirectResponse
    {
        // Hapus data
        $line2->delete();

        return redirect()->route('line2.index')->with('success', 'Data Line2 berhasil dihapus.');
    }
}
