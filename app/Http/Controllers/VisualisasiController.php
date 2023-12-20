<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dbflange;
use App\Models\datapn;
use App\Models\datapn2;
use App\Models\datapn3;
use App\Models\datapn4;
use App\Models\datapn5;
use App\Models\datapn6;
use App\Models\datapn7;
use App\Models\datapn8;
use App\Models\datapn9;
use App\Models\datapn10;
use App\Models\datapn11;
use App\Models\datapn12;
use App\Models\datapn13;
use App\Models\datapn14;
use App\Models\datapn15;
use App\Models\datapn16;
use App\Models\datapn17;
use App\Models\datapn18;
use App\Models\datapn19;
use App\Models\datapn20;
use App\Models\datapn21;
use App\Models\datapn22;
use App\Models\datapn23;
use App\Models\datapn24;
use App\Models\datapn25;
use App\Models\datapn26;
use App\Models\datapn27;
use App\Models\datapn28;
use App\Models\datapn29;
use App\Models\datapn30;
use App\Models\datapn31;
use App\Models\datapn32;
use App\Models\datapn33;
use App\Models\datapn34;
use App\Models\datapn35;
use App\Models\datapn36;
use App\Models\datapn37;
use App\Models\datapn38;
use App\Models\datapn39;
use App\Models\datapn40;
use App\Models\datapn41;
use App\Models\datapn42;

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
        $data = datapn::leftjoin('dbflanges', 'datapns.DC CODE', '=', 'dbflanges.DC CODE')
            ->select('datapns.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapns.QTY PROD as qty')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }
    public function getData2()
    {
        $data = datapn2::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn2s.DC CODE')
            ->select('datapn2s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn2s.QTY PROD as qty')
            ->latest('datapn2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData3()
    {
        $data = datapn3::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn3s.DC CODE')
            ->select('datapn3s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn3s.QTY PROD as qty')
            ->latest('datapn3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData4()
    {
        $data = datapn4::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn4s.DC CODE')
            ->select('datapn4s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn4s.QTY PROD as qty')
            ->latest('datapn4s.id')
            ->first();

        return response()->json($data);
    }
    public function getData5()
    {
        $data = datapn5::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn5s.DC CODE')
            ->select('datapn5s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn5s.QTY PROD as qty')
            ->latest('datapn5s.id')
            ->first();

        return response()->json($data);
    }
    public function getData6()
    {
        $data = datapn6::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn6s.DC CODE')
            ->select('datapn6s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn6s.QTY PROD as qty')
            ->latest('datapn6s.id')
            ->first();

        return response()->json($data);
    }
    public function getData7()
    {
        $data = datapn7::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn7s.DC CODE')
            ->select('datapn7s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn7s.QTY PROD as qty')
            ->latest('datapn7s.id')
            ->first();

        return response()->json($data);
    }
    public function getData8()
    {
        $data = datapn8::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn8s.DC CODE')
            ->select('datapn8s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn8s.QTY PROD as qty')
            ->latest('datapn8s.id')
            ->first();

        return response()->json($data);
    }
    public function getData9()
    {
        $data = datapn9::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn9s.DC CODE')
            ->select('datapn9s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn9s.QTY PROD as qty')
            ->latest('datapn9s.id')
            ->first();

        return response()->json($data);
    }
    public function getData10()
    {
        $data = datapn10::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn10s.DC CODE')
            ->select('datapn10s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn10s.QTY PROD as qty')
            ->latest('datapn10s.id')
            ->first();

        return response()->json($data);
    }
    public function getData11()
    {
        $data = datapn11::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn11s.DC CODE')
            ->select('datapn11s.id', 'datapn11s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn11s.QTY PROD as qty')
            ->latest('datapn11s.id')
            ->first();

        return response()->json($data);
    }
    public function getData12()
    {
        $data = datapn12::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn12s.DC CODE')
            ->select('datapn12s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn12s.QTY PROD as qty')
            ->latest('datapn12s.id')
            ->first();

        return response()->json($data);
    }
    public function getData13()
    {
        $data = datapn13::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn13s.DC CODE')
            ->select('datapn13s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn13s.QTY PROD as qty')
            ->latest('datapn13s.id')
            ->first();

        return response()->json($data);
    }
    public function getData14()
    {
        $data = datapn14::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn14s.DC CODE')
            ->select('datapn14s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn14s.QTY PROD as qty')
            ->latest('datapn14s.id')
            ->first();

        return response()->json($data);
    }
    public function getData15()
    {
        $data = datapn15::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn15s.DC CODE')
            ->select('datapn15s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn15s.QTY PROD as qty')
            ->latest('datapn15s.id')
            ->first();

        return response()->json($data);
    }
    public function getData16()
    {
        $data = datapn16::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn16s.DC CODE')
            ->select('datapn16s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn16s.QTY PROD as qty')
            ->latest('datapn16s.id')
            ->first();

        return response()->json($data);
    }
    public function getData17()
    {
        $data = datapn17::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn17s.DC CODE')
            ->select('datapn17s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn17s.QTY PROD as qty')
            ->latest('datapn17s.id')
            ->first();

        return response()->json($data);
    }
    public function getData18()
    {
        $data = datapn18::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn18s.DC CODE')
            ->select('datapn18s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn18s.QTY PROD as qty')
            ->latest('datapn18s.id')
            ->first();

        return response()->json($data);
    }
    public function getData19()
    {
        $data = datapn19::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn19s.DC CODE')
            ->select('datapn19s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn19s.QTY PROD as qty')
            ->latest('datapn19s.id')
            ->first();

        return response()->json($data);
    }
    public function getData20()
    {
        $data = datapn20::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn20s.DC CODE')
            ->select('datapn20s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn20s.QTY PROD as qty')
            ->latest('datapn20s.id')
            ->first();

        return response()->json($data);
    }

    public function getData21()
    {
        $data = datapn21::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn21s.DC CODE')
            ->select('datapn21s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn21s.QTY PROD as qty')
            ->latest('datapn21s.id')
            ->first();

        return response()->json($data);
    }
    public function getData22()
    {
        $data = datapn22::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn22s.DC CODE')
            ->select('datapn22s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn22s.QTY PROD as qty')
            ->latest('datapn22s.id')
            ->first();

        return response()->json($data);
    }
    public function getData23()
    {
        $data = datapn23::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn23s.DC CODE')
            ->select('datapn23s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn23s.QTY PROD as qty')
            ->latest('datapn23s.id')
            ->first();

        return response()->json($data);
    }
    public function getData24()
    {
        $data = datapn24::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn24s.DC CODE')
            ->select('datapn24s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn24s.QTY PROD as qty')
            ->latest('datapn24s.id')
            ->first();

        return response()->json($data);
    }
    public function getData25()
    {
        $data = datapn25::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn25s.DC CODE')
            ->select('datapn25s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn25s.QTY PROD as qty')
            ->latest('datapn25s.id')
            ->first();

        return response()->json($data);
    }
    public function getData26()
    {
        $data = datapn26::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn26s.DC CODE')
            ->select('datapn26s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn26s.QTY PROD as qty')
            ->latest('datapn26s.id')
            ->first();

        return response()->json($data);
    }
    public function getData27()
    {
        $data = datapn27::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn27s.DC CODE')
            ->select('datapn27s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn27s.QTY PROD as qty')
            ->latest('datapn27s.id')
            ->first();

        return response()->json($data);
    }
    public function getData28()
    {
        $data = datapn28::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn28s.DC CODE')
            ->select('datapn28s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn28s.QTY PROD as qty')
            ->latest('datapn28s.id')
            ->first();

        return response()->json($data);
    }
    public function getData29()
    {
        $data = datapn29::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn29s.DC CODE')
            ->select('datapn29s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn29s.QTY PROD as qty')
            ->latest('datapn29s.id')
            ->first();

        return response()->json($data);
    }
    public function getData30()
    {
        $data = datapn30::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn30s.DC CODE')
            ->select('datapn30s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn30s.QTY PROD as qty')
            ->latest('datapn30s.id')
            ->first();

        return response()->json($data);
    }
    public function getData31()
    {
        $data = datapn31::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn31s.DC CODE')
            ->select('datapn31s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn31s.QTY PROD as qty')
            ->latest('datapn31s.id')
            ->first();

        return response()->json($data);
    }
    public function getData32()
    {
        $data = datapn32::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn32s.DC CODE')
            ->select('datapn32s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn32s.QTY PROD as qty')
            ->latest('datapn32s.id')
            ->first();

        return response()->json($data);
    }
    public function getData33()
    {
        $data = datapn33::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn33s.DC CODE')
            ->select('datapn33s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn33s.QTY PROD as qty')
            ->latest('datapn33s.id')
            ->first();

        return response()->json($data);
    }
    public function getData34()
    {
        $data = datapn34::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn34s.DC CODE')
            ->select('datapn34s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn34s.QTY PROD as qty')
            ->latest('datapn34s.id')
            ->first();

        return response()->json($data);
    }
    public function getData35()
    {
        $data = datapn35::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn35s.DC CODE')
            ->select('datapn35s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn35s.QTY PROD as qty')
            ->latest('datapn35s.id')
            ->first();

        return response()->json($data);
    }
    public function getData36()
    {
        $data = datapn36::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn36s.DC CODE')
            ->select('datapn36s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn36s.QTY PROD as qty')
            ->latest('datapn36s.id')
            ->first();

        return response()->json($data);
    }
    public function getData37()
    {
        $data = datapn37::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn37s.DC CODE')
            ->select('datapn37s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn37s.QTY PROD as qty')
            ->latest('datapn37s.id')
            ->first();

        return response()->json($data);
    }
    public function getData38()
    {
        $data = datapn38::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn38s.DC CODE')
            ->select('datapn38s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn38s.QTY PROD as qty')
            ->latest('datapn38s.id')
            ->first();

        return response()->json($data);
    }
    public function getData39()
    {
        $data = datapn39::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn39s.DC CODE')
            ->select('datapn39s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn39s.QTY PROD as qty')
            ->latest('datapn39s.id')
            ->first();

        return response()->json($data);
    }
    public function getData40()
    {
        $data = datapn40::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn40s.DC CODE')
            ->select('datapn40s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn40s.QTY PROD as qty')
            ->latest('datapn40s.id')
            ->first();

        return response()->json($data);
    }
    public function getData41()
    {
        $data = datapn41::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn41s.DC CODE')
            ->select('datapn41s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn41s.QTY PROD as qty')
            ->latest('datapn41s.id')
            ->first();

        return response()->json($data);
    }
    public function getData42()
    {
        $data = datapn42::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn42s.DC CODE')
            ->select('datapn42s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn42s.QTY PROD as qty')
            ->latest('datapn42s.id')
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
    public function cek()
    {

        return view('riwayat.cek');
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

