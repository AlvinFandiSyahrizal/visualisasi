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

