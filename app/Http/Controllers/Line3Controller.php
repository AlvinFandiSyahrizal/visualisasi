<?php

namespace App\Http\Controllers;

use App\Models\Line3;
use App\Models\dbflange3;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class Line3Controller extends Controller
{
    public function index(): View
    {

        $dbflange3s = dbflange3::orderBy('id', 'desc')->paginate(50);

        return view('input.line3', compact('dbflange3s'));
    }

    public function create(): View
    {
        return view('input.line3', compact('dbflange3s'));
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'PARTNUMBER' => 'required',
            'FLANGENON' => 'required|integer',
            'LINE' => 'required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable',
            'DCCODE' => 'required|numeric',
        ]);

        dbflange3::create([
            'PARTNUMBER' => $request->input('PARTNUMBER'),
            'FLANGENON' => $request->input('FLANGENON'),
            'LINE' => $request->input('LINE'),
            'DCCODE' => $request->input('DCCODE'),
        ]);

        return redirect()->route('line3.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $dbflange3s = dbflange3::findOrFail($id);
        return view('line3.edit', compact('line3'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'PARTNUMBER' => 'required',
            'FLANGENON' => 'required|integer',
            'LINE' => 'required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable',
            'DCCODE' => 'required|numeric',
        ]);

        $dbflange3s = dbflange3::findOrFail($id);

        $dbflange3s->update([
            'PARTNUMBER' => $request->input('PARTNUMBER'),
            'FLANGENON' => $request->input('FLANGENON'),
            'LINE' => $request->input('LINE'),
            'DCCODE' => $request->input('DCCODE'),
        ]);

        return redirect()->route('line3.index')->with(['success' => 'Data berhasil diperbarui']);
    }

    public function destroy($id): RedirectResponse
    {
        $dbflange3s = dbflange3::findOrFail($id);
        $dbflange3s->delete();
        return redirect()->route('line3.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
