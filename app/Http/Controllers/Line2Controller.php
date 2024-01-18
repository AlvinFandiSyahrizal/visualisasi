<?php

namespace App\Http\Controllers;

use App\Models\Line2;
use App\Models\dbflange2;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class Line2Controller extends Controller
{
    public function index(): View
    {

        $dbflange2s = dbflange2::orderBy('id', 'desc')->paginate(50);

        return view('input.line2', compact('dbflange2s'));
    }

    public function create(): View
    {
        return view('input.line2', compact('dbflange2s'));
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

        dbflange2::create([
            'PARTNUMBER' => $request->input('PARTNUMBER'),
            'FLANGENON' => $request->input('FLANGENON'),
            'LINE' => $request->input('LINE'),
            'DCCODE' => $request->input('DCCODE'),
        ]);

        return redirect()->route('line2.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $dbflange2s = dbflange2::findOrFail($id);
        return view('line2.edit', compact('line2'));
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

        $dbflange2s = dbflange2::findOrFail($id);

        $dbflange2s->update([
            'PARTNUMBER' => $request->input('PARTNUMBER'),
            'FLANGENON' => $request->input('FLANGENON'),
            'LINE' => $request->input('LINE'),
            'DCCODE' => $request->input('DCCODE'),
        ]);

        return redirect()->route('line2.index')->with(['success' => 'Data berhasil diperbarui']);
    }

    public function destroy($id): RedirectResponse
    {
        $dbflange2s = dbflange2::findOrFail($id);
        $dbflange2s->delete();
        return redirect()->route('line2.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
