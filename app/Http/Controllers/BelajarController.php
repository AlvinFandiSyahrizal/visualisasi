<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Belajar;

class BelajarController extends Controller
{
    public function index()
    {
        // Fetch all records from the Belajar model
        $data = Belajar::all();
        // dd($data);

        // Return the 'belajar.belajar' view and pass the data to it
        return view('belajar.belajar', compact('data'));
    }

    public function getData()
    {
        // Select the 'id' and 'nama' columns, order by 'id' in descending order, and retrieve the first record
        $data = Belajar::select('id', 'nama')->orderBy('id', 'desc')->first();

        // Return the data as JSON response
        return response()->json($data);
    }
}
