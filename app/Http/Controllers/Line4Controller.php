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

        $dbflanges = dbflange::orderBy('id', 'desc')->paginate(50);

        return view('input.line4', compact('dbflanges'));
    }

    public function create(): View
    {
        return view('input.line4', compact('dbflanges'));
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

        dbflange::create([
            'PARTNUMBER' => $request->input('PARTNUMBER'),
            'FLANGENON' => $request->input('FLANGENON'),
            'LINE' => $request->input('LINE'),
            'DCCODE' => $request->input('DCCODE'),
        ]);

        return redirect()->route('line4.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $dbflanges = dbflange::findOrFail($id);
        return view('line4.edit', compact('line4'));
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

        $dbflanges = dbflange::findOrFail($id);

        $dbflanges->update([
            'PARTNUMBER' => $request->input('PARTNUMBER'),
            'FLANGENON' => $request->input('FLANGENON'),
            'LINE' => $request->input('LINE'),
            'DCCODE' => $request->input('DCCODE'),
        ]);

        return redirect()->route('line4.index')->with(['success' => 'Data berhasil diperbarui']);
    }

    public function destroy($id): RedirectResponse
    {
        $dbflanges = dbflange::findOrFail($id);
        $dbflanges->delete();
        return redirect()->route('line4.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
