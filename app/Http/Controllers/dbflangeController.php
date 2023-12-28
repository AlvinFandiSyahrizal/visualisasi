<?php

namespace App\Http\Controllers;

use App\Models\dbflange;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;

class dbflangeController extends Controller
{
    // public function index(): View
    // {
    //     $perPage = 10;
    //     $dbflanges = dbflange::paginate($perPage);

    //     return view('input.line2', compact('dbflanges'));
    // }


    // // public function create(): View
    // // {
    // //     // Implementation if needed
    // // }

    // public function store(Request $request): RedirectResponse
    // {
    //     // Validation can be added here based on your requirements
    //     $dbflange = new dbflange();
    //     $dbflange->PartNumber = $request->input('PartNumber');
    //     $dbflange->FlangeNon = $request->input('FLANGENON');
    //     $dbflange->Line = $request->input('LINE');
    //     $dbflange->DCCODE = $request->input('DCCODE');
    //     $dbflange->save();

    //     return redirect()->route('line2.index')->with('success', 'Data saved successfully.');
    // }

    // // public function show($id): View
    // // {
    // //     // Implementation if needed
    // // }

    // public function edit($id): View
    // {
    //     $dbflange = dbflange::find($id);
    //     return view('edit.line2', compact('dbflange'));
    // }

    // public function update(Request $request, $id): RedirectResponse
    // {
    //     // Validation can be added here based on your requirements
    //     $dbflange = dbflange::find($id);
    //     $dbflange->PartNumber = $request->input('PartNumber');
    //     $dbflange->FlangeNon = $request->input('FLANGENON');
    //     $dbflange->Line = $request->input('LINE');
    //     $dbflange->DCCODE = $request->input('DCCODE');
    //     $dbflange->save();

    //     return redirect()->route('line2.index')->with('success', 'Data updated successfully.');
    // }

    // public function destroy($id): RedirectResponse
    // {
    //     $dbflange = dbflange::find($id);
    //     $dbflange->delete();

    //     return redirect()->route('line2.index')->with('success', 'Data deleted successfully.');
    // }
}
