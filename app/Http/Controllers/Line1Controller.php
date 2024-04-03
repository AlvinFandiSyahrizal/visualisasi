<?php

namespace App\Http\Controllers;

use App\Models\Line1;
use App\Models\dbflange1;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class Line1Controller extends Controller
{
    public function index(): View
    {
        $dbflange1s = dbflange1::all();
        return view('input.line1', compact('dbflange1s'));
    }


    public function create(): View
    {
        return view('input.line1', compact('dbflange1s'));
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

        dbflange1::create([
            'PARTNUMBER' => $request->input('PARTNUMBER'),
            'FLANGENON' => $request->input('FLANGENON'),
            'LINE' => $request->input('LINE'),
            'DCCODE' => $request->input('DCCODE'),
        ]);

        return redirect()->route('line1.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $dbflange1s = dbflange1::findOrFail($id);
        return view('line1.edit', compact('line1'));
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

        $dbflange1s = dbflange1::findOrFail($id);

        $dbflange1s->update([
            'PARTNUMBER' => $request->input('PARTNUMBER'),
            'FLANGENON' => $request->input('FLANGENON'),
            'LINE' => $request->input('LINE'),
            'DCCODE' => $request->input('DCCODE'),
        ]);

        return redirect()->route('line1.index')->with(['success' => 'Data berhasil diperbarui']);
    }

    public function destroy($id): RedirectResponse
    {
        $dbflange1s = dbflange1::findOrFail($id);
        $dbflange1s->delete();
        return redirect()->route('line1.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
