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
        $data = dbflange::join('datapns', 'dbflanges.DC CODE', '=', 'datapns.DC CODE')
            ->select('datapns.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapns.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData2()
    {
        $data = dbflange::join('datapn2s', 'dbflanges.DC CODE', '=', 'datapn2s.DC CODE')
            ->select('datapn2s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn2s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData3()
    {
        $data = dbflange::join('datapn3s', 'dbflanges.DC CODE', '=', 'datapn3s.DC CODE')
            ->select('datapn3s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn3s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData4()
    {
        $data = dbflange::join('datapn4s', 'dbflanges.DC CODE', '=', 'datapn4s.DC CODE')
            ->select('datapn4s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn4s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData5()
    {
        $data = dbflange::join('datapn5s', 'dbflanges.DC CODE', '=', 'datapn5s.DC CODE')
            ->select('datapn5s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn5s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData6()
    {
        $data = dbflange::join('datapn6s', 'dbflanges.DC CODE', '=', 'datapn6s.DC CODE')
            ->select('datapn6s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn6s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData7()
    {
        $data = dbflange::join('datapn7s', 'dbflanges.DC CODE', '=', 'datapn7s.DC CODE')
            ->select('datapn7s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn7s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData8()
    {
        $data = dbflange::join('datapn8s', 'dbflanges.DC CODE', '=', 'datapn8s.DC CODE')
            ->select('datapn8s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn8s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData9()
    {
        $data = dbflange::join('datapn9s', 'dbflanges.DC CODE', '=', 'datapn9s.DC CODE')
            ->select('datapn9s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn9s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData10()
    {
        $data = dbflange::join('datapn10s', 'dbflanges.DC CODE', '=', 'datapn10s.DC CODE')
            ->select('datapn10s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn10s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData11()
    {
        $data = dbflange::join('datapn11s', 'dbflanges.DC CODE', '=', 'datapn11s.DC CODE')
            ->select('datapn11s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn11s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData12()
    {
        $data = dbflange::join('datapn12s', 'dbflanges.DC CODE', '=', 'datapn12s.DC CODE')
            ->select('datapn12s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn12s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData13()
    {
        $data = dbflange::join('datapn13s', 'dbflanges.DC CODE', '=', 'datapn13s.DC CODE')
            ->select('datapn13s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn13s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData14()
    {
        $data = dbflange::join('datapn14s', 'dbflanges.DC CODE', '=', 'datapn14s.DC CODE')
            ->select('datapn14s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn14s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData15()
    {
        $data = dbflange::join('datapn15s', 'dbflanges.DC CODE', '=', 'datapn15s.DC CODE')
            ->select('datapn15s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn15s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData16()
    {
        $data = dbflange::join('datapn16s', 'dbflanges.DC CODE', '=', 'datapn16s.DC CODE')
            ->select('datapn16s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn16s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData17()
    {
        $data = dbflange::join('datapn17s', 'dbflanges.DC CODE', '=', 'datapn17s.DC CODE')
            ->select('datapn17s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn17s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData18()
    {
        $data = dbflange::join('datapn18s', 'dbflanges.DC CODE', '=', 'datapn18s.DC CODE')
            ->select('datapn18s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn18s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData19()
    {
        $data = dbflange::join('datapn19s', 'dbflanges.DC CODE', '=', 'datapn19s.DC CODE')
            ->select('datapn19s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn19s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData20()
    {
        $data = dbflange::join('datapn20s', 'dbflanges.DC CODE as', '=', 'datapn20s.DC CODE')
            ->select('datapn20s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn20s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData21()
    {
        $data = dbflange::join('datapn21s', 'dbflanges.DC CODE', '=', 'datapn21s.DC CODE')
            ->select('datapn21s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn21s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData22()
    {
        $data = dbflange::join('datapn22s', 'dbflanges.DC CODE', '=', 'datapn22s.DC CODE')
            ->select('datapn22s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn22s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData23()
    {
        $data = dbflange::join('datapn23s', 'dbflanges.DC CODE', '=', 'datapn23s.DC CODE')
            ->select('datapn23s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn23s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData24()
    {
        $data = dbflange::join('datapn24s', 'dbflanges.DC CODE', '=', 'datapn24s.DC CODE')
            ->select('datapn24s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn24s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData25()
    {
        $data = dbflange::join('datapn25s', 'dbflanges.DC CODE', '=', 'datapn25s.DC CODE')
            ->select('datapn25s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn25s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData26()
    {
        $data = dbflange::join('datapn26s', 'dbflanges.DC CODE', '=', 'datapn26s.DC CODE')
            ->select('datapn26s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn26s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData27()
    {
        $data = dbflange::join('datapn27s', 'dbflanges.DC CODE', '=', 'datapn27s.DC CODE')
            ->select('datapn27s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn27s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData28()
    {
        $data = dbflange::join('datapn28s', 'dbflanges.DC CODE', '=', 'datapn28s.DC CODE')
            ->select('datapn28s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn28s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData29()
    {
        $data = dbflange::join('datapn29s', 'dbflanges.DC CODE', '=', 'datapn29s.DC CODE')
            ->select('datapn29s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn29s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData30()
    {
        $data = dbflange::join('datapn30s', 'dbflanges.DC CODE', '=', 'datapn30s.DC CODE')
            ->select('datapn30s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn30s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData31()
    {
        $data = dbflange::join('datapn31s', 'dbflanges.DC CODE', '=', 'datapn31s.DC CODE')
            ->select('datapn31s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn31s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData32()
    {
        $data = dbflange::join('datapn32s', 'dbflanges.DC CODE', '=', 'datapn32s.DC CODE')
            ->select('datapn32s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn32s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData33()
    {
        $data = dbflange::join('datapn33s', 'dbflanges.DC CODE', '=', 'datapn33s.DC CODE')
            ->select('datapn33s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn33s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData34()
    {
        $data = dbflange::join('datapn34s', 'dbflanges.DC CODE', '=', 'datapn34s.DC CODE')
            ->select('datapn34s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn34s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData35()
    {
        $data = dbflange::join('datapn35s', 'dbflanges.DC CODE', '=', 'datapn35s.DC CODE')
            ->select('datapn35s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn35s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData36()
    {
        $data = dbflange::join('datapn36s', 'dbflanges.DC CODE', '=', 'datapn36s.DC CODE')
            ->select('datapn36s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn36s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData37()
    {
        $data = dbflange::join('datapn37s', 'dbflanges.DC CODE', '=', 'datapn37s.DC CODE')
            ->select('datapn37s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn37s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData38()
    {
        $data = dbflange::join('datapn38s', 'dbflanges.DC CODE', '=', 'datapn38s.DC CODE')
            ->select('datapn38s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn38s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData39()
    {
        $data = dbflange::join('datapn39s', 'dbflanges.DC CODE', '=', 'datapn39s.DC CODE')
            ->select('datapn39s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn39s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData40()
    {
        $data = dbflange::join('datapn40s', 'dbflanges.DC CODE', '=', 'datapn40s.DC CODE')
            ->select('datapn40s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn40s.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }

    public function getLine2Data()
    {
        $dataline2 = dbflange::join('datapns', 'dbflanges.DC CODE as DCCODE', '=', 'datapns.DC CODE as DCCODE')
            ->select('datapns.DC CODE as DCCODE', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->where('dbflanges.Line', 'Line2')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($dataline2);
    }
    public function getLine3Data()
    {
        $dataline3 = dbflange::join('datapns', 'dbflanges.DC CODE as DCCODE', '=', 'datapns.DC CODE as DCCODE')
            ->select('datapns.DC CODE as DCCODE', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->where('dbflanges.Line', 'Line3')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($dataline3);
    }
    public function getLine4Data()
    {
        $dataline4 = dbflange::join('datapns', 'dbflanges.DC CODE as DCCODE', '=', 'datapns.DC CODE as DCCODE')
            ->select('datapns.DC CODE as DCCODE', 'dbflanges.FlangeNon', 'dbflanges.Line')
            ->where('dbflanges.Line', 'Line4')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($dataline4);
    }

    public function riwayat()
    {
        // // Ambil top 1 data visualisasi dari model
        // $ongoing = dbflange::join('datapns', 'dbflanges.DC CODE', '=', 'datapns.DC CODE')
        //     ->select('datapns.DC CODE as DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber')
        //     ->latest('dbflanges.id')
        //     ->first();

        // // Ambil semua data visualisasi selain top 1 dari model
        // $riwayatData = dbflange::join('datapns', 'dbflanges.PartNumber', '=', 'datapns.PartNumber')
        //     ->select('datapns.PartNumber', 'dbflanges.FlangeNon', 'dbflanges.Line')
        //     ->where('dbflanges.id', '!=', $ongoing->id) // Sesuaikan dengan kolom yang merupakan identitas unik
        //     ->latest('dbflanges.id')
        //     ->get();

        // Tampilkan view riwayat.blade.php dengan data
        return view('riwayat.visualisasi');
    }

    public function riwayat2()
    {

        return view('riwayat.visual');
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

