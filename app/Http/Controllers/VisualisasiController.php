<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dbflange;

class VisualisasiController extends Controller
{
    public function index()
    {
        $data = dbflange::all();
        return view('belajar.visualisasi', compact('data'));
    }

    public function line2()
    {
        $line2 = dbflange::where('Line', 'Line2')->first();
        return view('belajar.line2', compact('line2'));
    }
    public function line3()
    {
        $line3 = dbflange::where('Line', 'Line3')->first();
        return view('belajar.line3', compact('line3'));
    }
    public function line4()
    {
        $line4 = dbflange::where('Line', 'Line4')->first();
        return view('belajar.line4', compact('line4'));
    }

    public function getData()
    {
        $data = dbflange::join('datapns', 'dbflanges.PartNumber', '=', 'datapns.PartNumber')
            ->select('datapns.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData2()
    {
        $data = dbflange::join('datapn2s', 'dbflanges.PartNumber', '=', 'datapn2s.PartNumber')
            ->select('datapn2s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData3()
    {
        $data = dbflange::join('datapn3s', 'dbflanges.PartNumber', '=', 'datapn3s.PartNumber')
            ->select('datapn3s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData4()
    {
        $data = dbflange::join('datapn4s', 'dbflanges.PartNumber', '=', 'datapn4s.PartNumber')
            ->select('datapn4s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData5()
    {
        $data = dbflange::join('datapn5s', 'dbflanges.PartNumber', '=', 'datapn5s.PartNumber')
            ->select('datapn5s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData6()
    {
        $data = dbflange::join('datapn6s', 'dbflanges.PartNumber', '=', 'datapn6s.PartNumber')
            ->select('datapn6s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData7()
    {
        $data = dbflange::join('datapn7s', 'dbflanges.PartNumber', '=', 'datapn7s.PartNumber')
            ->select('datapn7s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData8()
    {
        $data = dbflange::join('datapn8s', 'dbflanges.PartNumber', '=', 'datapn8s.PartNumber')
            ->select('datapn8s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData9()
    {
        $data = dbflange::join('datapn9s', 'dbflanges.PartNumber', '=', 'datapn9s.PartNumber')
            ->select('datapn9s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData10()
    {
        $data = dbflange::join('datapn10s', 'dbflanges.PartNumber', '=', 'datapn10s.PartNumber')
            ->select('datapn10s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData11()
    {
        $data = dbflange::join('datapn11s', 'dbflanges.PartNumber', '=', 'datapn11s.PartNumber')
            ->select('datapn11s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData12()
    {
        $data = dbflange::join('datapn12s', 'dbflanges.PartNumber', '=', 'datapn12s.PartNumber')
            ->select('datapn12s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData13()
    {
        $data = dbflange::join('datapn13s', 'dbflanges.PartNumber', '=', 'datapn13s.PartNumber')
            ->select('datapn13s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData14()
    {
        $data = dbflange::join('datapn14s', 'dbflanges.PartNumber', '=', 'datapn14s.PartNumber')
            ->select('datapn14s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData15()
    {
        $data = dbflange::join('datapn15s', 'dbflanges.PartNumber', '=', 'datapn15s.PartNumber')
            ->select('datapn15s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData16()
    {
        $data = dbflange::join('datapn16s', 'dbflanges.PartNumber', '=', 'datapn16s.PartNumber')
            ->select('datapn16s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData17()
    {
        $data = dbflange::join('datapn17s', 'dbflanges.PartNumber', '=', 'datapn17s.PartNumber')
            ->select('datapn17s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData18()
    {
        $data = dbflange::join('datapn18s', 'dbflanges.PartNumber', '=', 'datapn18s.PartNumber')
            ->select('datapn18s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData19()
    {
        $data = dbflange::join('datapn19s', 'dbflanges.PartNumber', '=', 'datapn19s.PartNumber')
            ->select('datapn19s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData20()
    {
        $data = dbflange::join('datapn20s', 'dbflanges.PartNumber', '=', 'datapn20s.PartNumber')
            ->select('datapn20s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData21()
    {
        $data = dbflange::join('datapn21s', 'dbflanges.PartNumber', '=', 'datapn21s.PartNumber')
            ->select('datapn21s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData22()
    {
        $data = dbflange::join('datapn22s', 'dbflanges.PartNumber', '=', 'datapn22s.PartNumber')
            ->select('datapn22s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData23()
    {
        $data = dbflange::join('datapn23s', 'dbflanges.PartNumber', '=', 'datapn23s.PartNumber')
            ->select('datapn23s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData24()
    {
        $data = dbflange::join('datapn24s', 'dbflanges.PartNumber', '=', 'datapn24s.PartNumber')
            ->select('datapn24s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData25()
    {
        $data = dbflange::join('datapn25s', 'dbflanges.PartNumber', '=', 'datapn25s.PartNumber')
            ->select('datapn25s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData26()
    {
        $data = dbflange::join('datapn26s', 'dbflanges.PartNumber', '=', 'datapn26s.PartNumber')
            ->select('datapn26s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData27()
    {
        $data = dbflange::join('datapn27s', 'dbflanges.PartNumber', '=', 'datapn27s.PartNumber')
            ->select('datapn27s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData28()
    {
        $data = dbflange::join('datapn28s', 'dbflanges.PartNumber', '=', 'datapn28s.PartNumber')
            ->select('datapn28s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData29()
    {
        $data = dbflange::join('datapn29s', 'dbflanges.PartNumber', '=', 'datapn29s.PartNumber')
            ->select('datapn29s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData30()
    {
        $data = dbflange::join('datapn30s', 'dbflanges.PartNumber', '=', 'datapn30s.PartNumber')
            ->select('datapn30s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData31()
    {
        $data = dbflange::join('datapn31s', 'dbflanges.PartNumber', '=', 'datapn31s.PartNumber')
            ->select('datapn31s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData32()
    {
        $data = dbflange::join('datapn32s', 'dbflanges.PartNumber', '=', 'datapn32s.PartNumber')
            ->select('datapn32s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData33()
    {
        $data = dbflange::join('datapn33s', 'dbflanges.PartNumber', '=', 'datapn33s.PartNumber')
            ->select('datapn33s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData34()
    {
        $data = dbflange::join('datapn34s', 'dbflanges.PartNumber', '=', 'datapn34s.PartNumber')
            ->select('datapn34s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData35()
    {
        $data = dbflange::join('datapn35s', 'dbflanges.PartNumber', '=', 'datapn35s.PartNumber')
            ->select('datapn35s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData36()
    {
        $data = dbflange::join('datapn36s', 'dbflanges.PartNumber', '=', 'datapn36s.PartNumber')
            ->select('datapn36s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData37()
    {
        $data = dbflange::join('datapn37s', 'dbflanges.PartNumber', '=', 'datapn37s.PartNumber')
            ->select('datapn37s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData38()
    {
        $data = dbflange::join('datapn38s', 'dbflanges.PartNumber', '=', 'datapn38s.PartNumber')
            ->select('datapn38s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData39()
    {
        $data = dbflange::join('datapn39s', 'dbflanges.PartNumber', '=', 'datapn39s.PartNumber')
            ->select('datapn39s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData40()
    {
        $data = dbflange::join('datapn40s', 'dbflanges.PartNumber', '=', 'datapn40s.PartNumber')
            ->select('datapn40s.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }

    public function getLine2Data()
    {
        $dataline2 = dbflange::join('datapns', 'dbflanges.PartNumber', '=', 'datapns.PartNumber')
            ->select('datapns.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->where('dbflanges.Line', 'Line2')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($dataline2);
    }
    public function getLine3Data()
    {
        $dataline3 = dbflange::join('datapns', 'dbflanges.PartNumber', '=', 'datapns.PartNumber')
            ->select('datapns.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->where('dbflanges.Line', 'Line3')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($dataline3);
    }
    public function getLine4Data()
    {
        $dataline4 = dbflange::join('datapns', 'dbflanges.PartNumber', '=', 'datapns.PartNumber')
            ->select('datapns.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->where('dbflanges.Line', 'Line4')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($dataline4);
    }

    public function riwayat()
    {
        // Ambil top 1 data visualisasi dari model
        $ongoing = dbflange::join('datapns', 'dbflanges.PartNumber', '=', 'datapns.PartNumber')
            ->select('datapns.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->latest('dbflanges.id')
            ->first();

        // Ambil semua data visualisasi selain top 1 dari model
        $riwayatData = dbflange::join('datapns', 'dbflanges.PartNumber', '=', 'datapns.PartNumber')
            ->select('datapns.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->where('dbflanges.id', '!=', $ongoing->id) // Sesuaikan dengan kolom yang merupakan identitas unik
            ->latest('dbflanges.id')
            ->get();

        // Tampilkan view riwayat.blade.php dengan data
        return view('riwayat.visualisasi', compact('ongoing', 'riwayatData'));
    }

    public function riwayatline2()
    {
        // Ambil semua data visualisasi dari model
        $data = dbflange::join('datapns', 'dbflanges.PartNumber', '=', 'datapns.PartNumber')
            ->select('datapns.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->where('dbflanges.Line', 'Line2') // Filter by Line2
            ->latest('dbflanges.id')
            ->first(); // Use get() to retrieve all records

        // Tampilkan view riwayat.line2.blade.php
        return view('riwayat.line2', compact('data'));
    }
    public function riwayatline3()
    {
        // Ambil semua data visualisasi dari model
        $data = dbflange::join('datapns', 'dbflanges.PartNumber', '=', 'datapns.PartNumber')
            ->select('datapns.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->where('dbflanges.Line', 'Line3') // Filter by Line2
            ->latest('dbflanges.id')
            ->first(); // Use get() to retrieve all records

        // Tampilkan view riwayat.line2.blade.php
        return view('riwayat.line3', compact('data'));
    }
    public function riwayatline4()
    {
        // Ambil semua data visualisasi dari model
        $data = dbflange::join('datapns', 'dbflanges.PartNumber', '=', 'datapns.PartNumber')
            ->select('datapns.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->where('dbflanges.Line', 'Line4') // Filter by Line2
            ->latest('dbflanges.id')
            ->first(); // Use get() to retrieve all records

        // Tampilkan view riwayat.line2.blade.php
        return view('riwayat.line4', compact('data'));
    }
}

