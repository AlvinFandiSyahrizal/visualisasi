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
        $dbflange2s = dbflange2::orderBy('id','desc')->paginate(10);
        return view('input.line2', compact('dbflange2s'));
    }


    public function create(): View
    {
        return view('line2.create');
    }

    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'PARTNUMBER' => 'required',
            'FLANGENON' => 'required|integer',
            'LINE' => 'required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable',
            'DCCODE' => 'required|integer',
        ]);

        Line2::create($request->all());

        return redirect()->route('line2.index')->with('success', 'Data Line2 berhasil ditambahkan.');
    }

    public function show(Line2 $dbflange): View
    {
        return view('line2.show', compact('line2'));
    }

    public function edit(Line2 $dbflange): View
    {
        return view('line2.edit', compact('line2'));
    }

    public function update(Request $request, Line2 $dbflange): RedirectResponse
    {

        $request->validate([    
            'PARTNUMBER' => 'required',
            'FLANGENON' => 'required|integer',
            'LINE' => 'required',
            'DCCODE' => 'required|integer',
        ]);

        $dbflange->update($request->all());

        return redirect()->route('line2.index')->with('success', 'Data Line2 berhasil diperbarui.');
    }

    public function destroy(Line2 $line2): RedirectResponse
    {
        $dbflange->delete();

        return redirect()->route('line2.index')->with('success', 'Data Line2 berhasil dihapus.');
    }
}
