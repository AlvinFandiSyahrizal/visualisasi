<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\dbflange;
use App\Models\dbflange2;
use App\Models\datapn;
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
use App\Models\datapn43;

use App\Models\datapn19line3;
use App\Models\datapn20line3;
use App\Models\datapn21line3;
use App\Models\datapn22line3;
use App\Models\datapn23line3;
use App\Models\datapn24line3;
use App\Models\datapn25line3;
use App\Models\datapn26line3;
use App\Models\datapn27line3;
use App\Models\datapn28line3;
use App\Models\datapn29line3;
use App\Models\datapn30line3;
use App\Models\datapn31line3;
use App\Models\datapn32line3;
use App\Models\datapn33line3;
use App\Models\datapn34line3;
use App\Models\datapn35line3;
use App\Models\datapn36line3;
use App\Models\datapn37line3;
use App\Models\datapn38line3;
use App\Models\datapn39line3;
use App\Models\datapn40line3;
use App\Models\datapn41line3;
use App\Models\datapn42line3;

use App\Models\datapn19line2;
use App\Models\datapn20line2;
use App\Models\datapn21line2;
use App\Models\datapn22line2;
use App\Models\datapn23line2;
use App\Models\datapn24line2;
use App\Models\datapn25line2;
use App\Models\datapn26line2;
use App\Models\datapn27line2;
use App\Models\datapn28line2;
use App\Models\datapn29line2;
use App\Models\datapn30line2;
use App\Models\datapn31line2;
use App\Models\datapn32line2;
use App\Models\datapn33line2;
use App\Models\datapn34line2;
use App\Models\datapn35line2;
use App\Models\datapn36line2;
use App\Models\datapn37line2;
use App\Models\datapn38line2;
use App\Models\datapn39line2;
use App\Models\datapn40line2;
use App\Models\datapn41line2;
use App\Models\datapn42line2;

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
            ->select('datapns.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapns.QTY PROD as qty', \DB::raw('datapns.[SEQ.NUMBER] as SeqNo'), 'datapns.ACTUAL PROD as act', 'datapns.STATUS as status')
            ->latest('dbflanges.id')
            ->first();

        return response()->json($data);
    }

    // ini buat line4
    public function getData19()
    {
        $data = datapn19::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn19s.DC CODE')
            ->select('datapn19s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn19s.QTY PROD as qty', \DB::raw('datapn19s.[SEQ.NUMBER] as SeqNo'), 'datapn19s.ACTUAL PROD as act', 'datapn19s.STATUS as status')
            ->latest('datapn19s.id')
            ->first();

        return response()->json($data);
    }
    public function getData20()
    {
        $data = datapn20::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn20s.DC CODE')
            ->select('datapn20s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn20s.QTY PROD as qty', \DB::raw('datapn20s.[SEQ.NUMBER] as SeqNo'), 'datapn20s.ACTUAL PROD as act', 'datapn20s.STATUS as status')
            ->latest('datapn20s.id')
            ->first();

        return response()->json($data);
    }

    public function getData21()
    {
        $data = datapn21::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn21s.DC CODE')
            ->select('datapn21s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn21s.QTY PROD as qty', \DB::raw('datapn21s.[SEQ.NUMBER] as SeqNo'), 'datapn21s.ACTUAL PROD as act', 'datapn21s.STATUS as status')
            ->latest('datapn21s.id')
            ->first();

        return response()->json($data);
    }
    public function getData22()
    {
        $data = datapn22::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn22s.DC CODE')
            ->select('datapn22s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn22s.QTY PROD as qty', \DB::raw('datapn22s.[SEQ.NUMBER] as SeqNo'), 'datapn22s.ACTUAL PROD as act', 'datapn22s.STATUS as status')
            ->latest('datapn22s.id')
            ->first();

        return response()->json($data);
    }
    public function getData23()
    {
        $data = datapn23::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn23s.DC CODE')
            ->select('datapn23s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn23s.QTY PROD as qty', \DB::raw('datapn23s.[SEQ.NUMBER] as SeqNo'), 'datapn23s.ACTUAL PROD as act', 'datapn23s.STATUS as status')
            ->latest('datapn23s.id')
            ->first();

        return response()->json($data);
    }
    public function getData24()
    {
        $data = datapn24::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn24s.DC CODE')
            ->select('datapn24s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn24s.QTY PROD as qty', \DB::raw('datapn24s.[SEQ.NUMBER] as SeqNo'), 'datapn24s.ACTUAL PROD as act', 'datapn24s.STATUS as status')
            ->latest('datapn24s.id')
            ->first();

        return response()->json($data);
    }
    public function getData25()
    {
        $data = datapn25::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn25s.DC CODE')
            ->select('datapn25s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn25s.QTY PROD as qty', \DB::raw('datapn25s.[SEQ.NUMBER] as SeqNo'), 'datapn25s.ACTUAL PROD as act', 'datapn25s.STATUS as status')
            ->latest('datapn25s.id')
            ->first();

        return response()->json($data);
    }

    public function getData26()
    {
        $data = datapn26::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn26s.DC CODE')
            ->select('datapn26s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn26s.QTY PROD as qty', \DB::raw('datapn26s.[SEQ.NUMBER] as SeqNo'), 'datapn26s.ACTUAL PROD as act', 'datapn26s.STATUS as status')
            ->latest('datapn26s.id')
            ->first();

        return response()->json($data);
    }
    public function getData27()
    {
        $data = datapn27::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn27s.DC CODE')
            ->select('datapn27s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn27s.QTY PROD as qty', \DB::raw('datapn27s.[SEQ.NUMBER] as SeqNo'), 'datapn27s.ACTUAL PROD as act', 'datapn27s.STATUS as status')
            ->latest('datapn27s.id')
            ->first();

        return response()->json($data);
    }
    public function getData28()
    {
        $data = datapn28::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn28s.DC CODE')
            ->select('datapn28s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn28s.QTY PROD as qty', \DB::raw('datapn28s.[SEQ.NUMBER] as SeqNo'), 'datapn28s.ACTUAL PROD as act', 'datapn28s.STATUS as status')
            ->latest('datapn28s.id')
            ->first();

        return response()->json($data);
    }
    public function getData29()
    {
        $data = datapn29::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn29s.DC CODE')
            ->select('datapn29s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn29s.QTY PROD as qty', \DB::raw('datapn29s.[SEQ.NUMBER] as SeqNo'), 'datapn29s.ACTUAL PROD as act', 'datapn29s.STATUS as status')
            ->latest('datapn29s.id')
            ->first();

        return response()->json($data);
    }
    public function getData30()
    {
        $data = datapn30::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn30s.DC CODE')
            ->select('datapn30s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn30s.QTY PROD as qty', \DB::raw('datapn30s.[SEQ.NUMBER] as SeqNo'), 'datapn30s.ACTUAL PROD as act', 'datapn30s.STATUS as status')
            ->latest('datapn30s.id')
            ->first();

        return response()->json($data);
    }
    public function getData31()
    {
        $data = datapn31::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn31s.DC CODE')
            ->select('datapn31s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn31s.QTY PROD as qty', \DB::raw('datapn31s.[SEQ.NUMBER] as SeqNo'), 'datapn31s.ACTUAL PROD as act', 'datapn31s.STATUS as status')
            ->latest('datapn31s.id')
            ->first();

        return response()->json($data);
    }
    public function getData32()
    {
        $data = datapn32::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn32s.DC CODE')
            ->select('datapn32s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn32s.QTY PROD as qty', \DB::raw('datapn32s.[SEQ.NUMBER] as SeqNo'), 'datapn32s.ACTUAL PROD as act', 'datapn32s.STATUS as status')
            ->latest('datapn32s.id')
            ->first();

        return response()->json($data);
    }
    public function getData33()
    {
        $data = datapn33::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn33s.DC CODE')
            ->select('datapn33s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn33s.QTY PROD as qty', \DB::raw('datapn33s.[SEQ.NUMBER] as SeqNo'), 'datapn33s.ACTUAL PROD as act', 'datapn33s.STATUS as status')
            ->latest('datapn33s.id')
            ->first();

        return response()->json($data);
    }
    public function getData34()
    {
        $data = datapn34::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn34s.DC CODE')
            ->select('datapn34s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn34s.QTY PROD as qty', \DB::raw('datapn34s.[SEQ.NUMBER] as SeqNo'), 'datapn34s.ACTUAL PROD as act', 'datapn34s.STATUS as status')
            ->latest('datapn34s.id')
            ->first();

        return response()->json($data);
    }
    public function getData35()
    {
        $data = datapn35::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn35s.DC CODE')
            ->select('datapn35s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn35s.QTY PROD as qty', \DB::raw('datapn35s.[SEQ.NUMBER] as SeqNo'), 'datapn35s.ACTUAL PROD as act', 'datapn35s.STATUS as status')
            ->latest('datapn35s.id')
            ->first();

        return response()->json($data);
    }
    public function getData36()
    {
        $data = datapn36::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn36s.DC CODE')
            ->select('datapn36s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn36s.QTY PROD as qty', \DB::raw('datapn36s.[SEQ.NUMBER] as SeqNo'), 'datapn36s.ACTUAL PROD as act', 'datapn36s.STATUS as status')
            ->latest('datapn36s.id')
            ->first();

        return response()->json($data);
    }
    public function getData37()
    {
        $data = datapn37::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn37s.DC CODE')
            ->select('datapn37s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn37s.QTY PROD as qty', \DB::raw('datapn37s.[SEQ.NUMBER] as SeqNo'), 'datapn37s.ACTUAL PROD as act', 'datapn37s.STATUS as status')
            ->latest('datapn37s.id')
            ->first();

        return response()->json($data);
    }
    public function getData38()
    {
        $data = datapn38::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn38s.DC CODE')
            ->select('datapn38s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn38s.QTY PROD as qty', \DB::raw('datapn38s.[SEQ.NUMBER] as SeqNo'), 'datapn38s.ACTUAL PROD as act', 'datapn38s.STATUS as status')
            ->latest('datapn38s.id')
            ->first();

        return response()->json($data);
    }
    public function getData39()
    {
        $data = datapn39::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn39s.DC CODE')
            ->select('datapn39s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn39s.QTY PROD as qty', \DB::raw('datapn39s.[SEQ.NUMBER] as SeqNo'), 'datapn39s.ACTUAL PROD as act', 'datapn39s.STATUS as status')
            ->latest('datapn39s.id')
            ->first();

        return response()->json($data);
    }
    public function getData40()
    {
        $data = datapn40::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn40s.DC CODE')
            ->select('datapn40s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn40s.QTY PROD as qty', \DB::raw('datapn40s.[SEQ.NUMBER] as SeqNo'), 'datapn40s.ACTUAL PROD as act', 'datapn40s.STATUS as status')
            ->latest('datapn40s.id')
            ->first();

        return response()->json($data);
    }
    public function getData41()
    {
        $data = datapn41::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn41s.DC CODE')
            ->select('datapn41s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn41s.QTY PROD as qty', \DB::raw('datapn41s.[SEQ.NUMBER] as SeqNo'), 'datapn41s.ACTUAL PROD as act', 'datapn41s.STATUS as status')
            ->latest('datapn41s.id')
            ->first();

        return response()->json($data);
    }
    public function getData42()
    {
        $data = datapn42::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn42s.DC CODE')
            ->select('datapn42s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn42s.QTY PROD as qty', \DB::raw('datapn42s.[SEQ.NUMBER] as SeqNo'), 'datapn42s.ACTUAL PROD as act', 'datapn42s.STATUS as status')
            ->latest('datapn42s.id')
            ->first();

        return response()->json($data);
    }

    public function getData43()
    {
        $data = datapn43::leftjoin('dbflanges', 'dbflanges.DC CODE', '=', 'datapn43s.DC CODE')
            ->select('datapn43s.DC CODE as DCCODE', 'dbflanges.FLANGENON as FlangeNon', 'dbflanges.LINE as Line', 'dbflanges.PART NUMBER as PartNumber', 'datapn43s.QTY PROD as qty', \DB::raw('datapn43s.[SEQ.NUMBER] as SeqNo'), 'datapn43s.ACTUAL PROD as act', 'datapn43s.STATUS as status')
            ->latest('datapn43s.id')
            ->first();

        return response()->json($data);
    }

    //ini buat line 3
    public function getData19line3()
    {
        $data = datapn19line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn19line3s.DC CODE')
            ->select('datapn19line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn19line3s.QTY PROD as qty', \DB::raw('datapn19line3s.[SEQ.NUMBER] as SeqNo'), 'datapn19line3s.ACTUAL PROD as act', 'datapn19line3s.STATUS as status')
            ->latest('datapn19line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData20line3()
    {
        $data = datapn20line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn20line3s.DC CODE')
            ->select('datapn20line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn20line3s.QTY PROD as qty', \DB::raw('datapn20line3s.[SEQ.NUMBER] as SeqNo'), 'datapn20line3s.ACTUAL PROD as act', 'datapn20line3s.STATUS as status')
            ->latest('datapn20line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData21line3()
    {
        $data = datapn21line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn21line3s.DC CODE')
            ->select('datapn21line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn21line3s.QTY PROD as qty', \DB::raw('datapn21line3s.[SEQ.NUMBER] as SeqNo'), 'datapn21line3s.ACTUAL PROD as act', 'datapn21line3s.STATUS as status')
            ->latest('datapn21line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData22line3()
    {
        $data = datapn22line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn22line3s.DC CODE')
            ->select('datapn22line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn22line3s.QTY PROD as qty', \DB::raw('datapn22line3s.[SEQ.NUMBER] as SeqNo'), 'datapn22line3s.ACTUAL PROD as act', 'datapn22line3s.STATUS as status')
            ->latest('datapn22line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData23line3()
    {
        $data = datapn23line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn23line3s.DC CODE')
            ->select('datapn23line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn23line3s.QTY PROD as qty', \DB::raw('datapn23line3s.[SEQ.NUMBER] as SeqNo'), 'datapn23line3s.ACTUAL PROD as act', 'datapn23line3s.STATUS as status')
            ->latest('datapn23line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData24line3()
    {
        $data = datapn24line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn24line3s.DC CODE')
            ->select('datapn24line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn24line3s.QTY PROD as qty', \DB::raw('datapn24line3s.[SEQ.NUMBER] as SeqNo'), 'datapn24line3s.ACTUAL PROD as act', 'datapn24line3s.STATUS as status')
            ->latest('datapn24line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData25line3()
    {
        $data = datapn25line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn25line3s.DC CODE')
            ->select('datapn25line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn25line3s.QTY PROD as qty', \DB::raw('datapn25line3s.[SEQ.NUMBER] as SeqNo'), 'datapn25line3s.ACTUAL PROD as act', 'datapn25line3s.STATUS as status')
            ->latest('datapn25line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData26line3()
    {
        $data = datapn26line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn26line3s.DC CODE')
            ->select('datapn26line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn26line3s.QTY PROD as qty', \DB::raw('datapn26line3s.[SEQ.NUMBER] as SeqNo'), 'datapn26line3s.ACTUAL PROD as act', 'datapn26line3s.STATUS as status')
            ->latest('datapn26line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData27line3()
    {
        $data = datapn27line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn27line3s.DC CODE')
            ->select('datapn27line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn27line3s.QTY PROD as qty', \DB::raw('datapn27line3s.[SEQ.NUMBER] as SeqNo'), 'datapn27line3s.ACTUAL PROD as act', 'datapn27line3s.STATUS as status')
            ->latest('datapn27line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData28line3()
    {
        $data = datapn28line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn28line3s.DC CODE')
            ->select('datapn28line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn28line3s.QTY PROD as qty', \DB::raw('datapn28line3s.[SEQ.NUMBER] as SeqNo'), 'datapn28line3s.ACTUAL PROD as act', 'datapn28line3s.STATUS as status')
            ->latest('datapn28line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData29line3()
    {
        $data = datapn29line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn29line3s.DC CODE')
            ->select('datapn29line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn29line3s.QTY PROD as qty', \DB::raw('datapn29line3s.[SEQ.NUMBER] as SeqNo'), 'datapn29line3s.ACTUAL PROD as act', 'datapn29line3s.STATUS as status')
            ->latest('datapn29line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData30line3()
    {
        $data = datapn30line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn30line3s.DC CODE')
            ->select('datapn30line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn30line3s.QTY PROD as qty', \DB::raw('datapn30line3s.[SEQ.NUMBER] as SeqNo'), 'datapn30line3s.ACTUAL PROD as act', 'datapn30line3s.STATUS as status')
            ->latest('datapn30line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData31line3()
    {
        $data = datapn31line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn31line3s.DC CODE')
            ->select('datapn31line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn31line3s.QTY PROD as qty', \DB::raw('datapn31line3s.[SEQ.NUMBER] as SeqNo'), 'datapn31line3s.ACTUAL PROD as act', 'datapn31line3s.STATUS as status')
            ->latest('datapn31line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData32line3()
    {
        $data = datapn32line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn32line3s.DC CODE')
            ->select('datapn32line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn32line3s.QTY PROD as qty', \DB::raw('datapn32line3s.[SEQ.NUMBER] as SeqNo'), 'datapn32line3s.ACTUAL PROD as act', 'datapn32line3s.STATUS as status')
            ->latest('datapn32line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData33line3()
    {
        $data = datapn33line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn33line3s.DC CODE')
            ->select('datapn33line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn33line3s.QTY PROD as qty', \DB::raw('datapn33line3s.[SEQ.NUMBER] as SeqNo'), 'datapn33line3s.ACTUAL PROD as act', 'datapn33line3s.STATUS as status')
            ->latest('datapn33line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData34line3()
    {
        $data = datapn34line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn34line3s.DC CODE')
            ->select('datapn34line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn34line3s.QTY PROD as qty', \DB::raw('datapn34line3s.[SEQ.NUMBER] as SeqNo'), 'datapn34line3s.ACTUAL PROD as act', 'datapn34line3s.STATUS as status')
            ->latest('datapn34line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData35line3()
    {
        $data = datapn35line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn35line3s.DC CODE')
            ->select('datapn35line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn35line3s.QTY PROD as qty', \DB::raw('datapn35line3s.[SEQ.NUMBER] as SeqNo'), 'datapn35line3s.ACTUAL PROD as act', 'datapn35line3s.STATUS as status')
            ->latest('datapn35line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData36line3()
    {
        $data = datapn36line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn36line3s.DC CODE')
            ->select('datapn36line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn36line3s.QTY PROD as qty', \DB::raw('datapn36line3s.[SEQ.NUMBER] as SeqNo'), 'datapn36line3s.ACTUAL PROD as act', 'datapn36line3s.STATUS as status')
            ->latest('datapn36line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData37line3()
    {
        $data = datapn37line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn37line3s.DC CODE')
            ->select('datapn37line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn37line3s.QTY PROD as qty', \DB::raw('datapn37line3s.[SEQ.NUMBER] as SeqNo'), 'datapn37line3s.ACTUAL PROD as act', 'datapn37line3s.STATUS as status')
            ->latest('datapn37line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData38line3()
    {
        $data = datapn38line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn38line3s.DC CODE')
            ->select('datapn38line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn38line3s.QTY PROD as qty', \DB::raw('datapn38line3s.[SEQ.NUMBER] as SeqNo'), 'datapn38line3s.ACTUAL PROD as act', 'datapn38line3s.STATUS as status')
            ->latest('datapn38line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData39line3()
    {
        $data = datapn39line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn39line3s.DC CODE')
            ->select('datapn39line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn39line3s.QTY PROD as qty', \DB::raw('datapn39line3s.[SEQ.NUMBER] as SeqNo'), 'datapn39line3s.ACTUAL PROD as act', 'datapn39line3s.STATUS as status')
            ->latest('datapn39line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData40line3()
    {
        $data = datapn40line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn40line3s.DC CODE')
            ->select('datapn40line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn40line3s.QTY PROD as qty', \DB::raw('datapn40line3s.[SEQ.NUMBER] as SeqNo'), 'datapn40line3s.ACTUAL PROD as act', 'datapn40line3s.STATUS as status')
            ->latest('datapn40line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData41line3()
    {
        $data = datapn41line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn41line3s.DC CODE')
            ->select('datapn41line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn41line3s.QTY PROD as qty', \DB::raw('datapn41line3s.[SEQ.NUMBER] as SeqNo'), 'datapn41line3s.ACTUAL PROD as act', 'datapn41line3s.STATUS as status')
            ->latest('datapn41line3s.id')
            ->first();

        return response()->json($data);
    }
    public function getData42line3()
    {
        $data = datapn42line3::leftjoin('dbflange3s', 'dbflange3s.DC CODE', '=', 'datapn42line3s.DC CODE')
            ->select('datapn42line3s.DC CODE as DCCODE', 'dbflange3s.FLANGENON as FlangeNon', 'dbflange3s.LINE as Line', 'dbflange3s.PART NUMBER as PartNumber', 'datapn42line3s.QTY PROD as qty', \DB::raw('datapn42line3s.[SEQ.NUMBER] as SeqNo'), 'datapn42line3s.ACTUAL PROD as act', 'datapn42line3s.STATUS as status')
            ->latest('datapn42line3s.id')
            ->first();

        return response()->json($data);
    }


    // ini buat line2
    public function getData19line2()
    {
        $data = datapn19line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn19line2s.DC CODE')
            ->select('datapn19line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn19line2s.QTY PROD as qty', \DB::raw('datapn19line2s.[SEQ.NUMBER] as SeqNo'), 'datapn19line2s.ACTUAL PROD as act', 'datapn19line2s.STATUS as status')
            ->latest('datapn19line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData20line2()
    {
        $data = datapn20line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn20line2s.DC CODE')
            ->select('datapn20line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn20line2s.QTY PROD as qty', \DB::raw('datapn20line2s.[SEQ.NUMBER] as SeqNo'), 'datapn20line2s.ACTUAL PROD as act', 'datapn20line2s.STATUS as status')
            ->latest('datapn20line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData21line2()
    {
        $data = datapn21line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn21line2s.DC CODE')
            ->select('datapn21line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn21line2s.QTY PROD as qty', \DB::raw('datapn21line2s.[SEQ.NUMBER] as SeqNo'), 'datapn21line2s.ACTUAL PROD as act', 'datapn21line2s.STATUS as status')
            ->latest('datapn21line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData22line2()
    {
        $data = datapn22line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn22line2s.DC CODE')
            ->select('datapn22line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn22line2s.QTY PROD as qty', \DB::raw('datapn22line2s.[SEQ.NUMBER] as SeqNo'), 'datapn22line2s.ACTUAL PROD as act', 'datapn22line2s.STATUS as status')
            ->latest('datapn22line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData23line2()
    {
        $data = datapn23line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn23line2s.DC CODE')
            ->select('datapn23line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn23line2s.QTY PROD as qty', \DB::raw('datapn23line2s.[SEQ.NUMBER] as SeqNo'), 'datapn23line2s.ACTUAL PROD as act', 'datapn23line2s.STATUS as status')
            ->latest('datapn23line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData24line2()
    {
        $data = datapn24line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn24line2s.DC CODE')
            ->select('datapn24line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn24line2s.QTY PROD as qty', \DB::raw('datapn24line2s.[SEQ.NUMBER] as SeqNo'), 'datapn24line2s.ACTUAL PROD as act', 'datapn24line2s.STATUS as status')
            ->latest('datapn24line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData25line2()
    {
        $data = datapn25line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn25line2s.DC CODE')
            ->select('datapn25line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn25line2s.QTY PROD as qty', \DB::raw('datapn25line2s.[SEQ.NUMBER] as SeqNo'), 'datapn25line2s.ACTUAL PROD as act', 'datapn25line2s.STATUS as status')
            ->latest('datapn25line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData26line2()
    {
        $data = datapn26line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn26line2s.DC CODE')
            ->select('datapn26line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn26line2s.QTY PROD as qty', \DB::raw('datapn26line2s.[SEQ.NUMBER] as SeqNo'), 'datapn26line2s.ACTUAL PROD as act', 'datapn26line2s.STATUS as status')
            ->latest('datapn26line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData27line2()
    {
        $data = datapn27line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn27line2s.DC CODE')
            ->select('datapn27line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn27line2s.QTY PROD as qty', \DB::raw('datapn27line2s.[SEQ.NUMBER] as SeqNo'), 'datapn27line2s.ACTUAL PROD as act', 'datapn27line2s.STATUS as status')
            ->latest('datapn27line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData28line2()
    {
        $data = datapn28line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn28line2s.DC CODE')
            ->select('datapn28line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn28line2s.QTY PROD as qty', \DB::raw('datapn28line2s.[SEQ.NUMBER] as SeqNo'), 'datapn28line2s.ACTUAL PROD as act', 'datapn28line2s.STATUS as status')
            ->latest('datapn28line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData29line2()
    {
        $data = datapn29line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn29line2s.DC CODE')
            ->select('datapn29line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn29line2s.QTY PROD as qty', \DB::raw('datapn29line2s.[SEQ.NUMBER] as SeqNo'), 'datapn29line2s.ACTUAL PROD as act', 'datapn29line2s.STATUS as status')
            ->latest('datapn29line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData30line2()
    {
        $data = datapn30line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn30line2s.DC CODE')
            ->select('datapn30line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn30line2s.QTY PROD as qty', \DB::raw('datapn30line2s.[SEQ.NUMBER] as SeqNo'), 'datapn30line2s.ACTUAL PROD as act', 'datapn30line2s.STATUS as status')
            ->latest('datapn30line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData31line2()
    {
        $data = datapn31line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn31line2s.DC CODE')
            ->select('datapn31line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn31line2s.QTY PROD as qty', \DB::raw('datapn31line2s.[SEQ.NUMBER] as SeqNo'), 'datapn31line2s.ACTUAL PROD as act', 'datapn31line2s.STATUS as status')
            ->latest('datapn31line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData32line2()
    {
        $data = datapn32line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn32line2s.DC CODE')
            ->select('datapn32line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn32line2s.QTY PROD as qty', \DB::raw('datapn32line2s.[SEQ.NUMBER] as SeqNo'), 'datapn32line2s.ACTUAL PROD as act', 'datapn32line2s.STATUS as status')
            ->latest('datapn32line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData33line2()
    {
        $data = datapn33line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn33line2s.DC CODE')
            ->select('datapn33line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn33line2s.QTY PROD as qty', \DB::raw('datapn33line2s.[SEQ.NUMBER] as SeqNo'), 'datapn33line2s.ACTUAL PROD as act', 'datapn33line2s.STATUS as status')
            ->latest('datapn33line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData34line2()
    {
        $data = datapn34line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn34line2s.DC CODE')
            ->select('datapn34line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn34line2s.QTY PROD as qty', \DB::raw('datapn34line2s.[SEQ.NUMBER] as SeqNo'), 'datapn34line2s.ACTUAL PROD as act', 'datapn34line2s.STATUS as status')
            ->latest('datapn34line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData35line2()
    {
        $data = datapn35line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn35line2s.DC CODE')
            ->select('datapn35line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn35line2s.QTY PROD as qty', \DB::raw('datapn35line2s.[SEQ.NUMBER] as SeqNo'), 'datapn35line2s.ACTUAL PROD as act', 'datapn35line2s.STATUS as status')
            ->latest('datapn35line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData36line2()
    {
        $data = datapn36line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn36line2s.DC CODE')
            ->select('datapn36line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn36line2s.QTY PROD as qty', \DB::raw('datapn36line2s.[SEQ.NUMBER] as SeqNo'), 'datapn36line2s.ACTUAL PROD as act', 'datapn36line2s.STATUS as status')
            ->latest('datapn36line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData37line2()
    {
        $data = datapn37line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn37line2s.DC CODE')
            ->select('datapn37line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn37line2s.QTY PROD as qty', \DB::raw('datapn37line2s.[SEQ.NUMBER] as SeqNo'), 'datapn37line2s.ACTUAL PROD as act', 'datapn37line2s.STATUS as status')
            ->latest('datapn37line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData38line2()
    {
        $data = datapn38line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn38line2s.DC CODE')
            ->select('datapn38line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn38line2s.QTY PROD as qty', \DB::raw('datapn38line2s.[SEQ.NUMBER] as SeqNo'), 'datapn38line2s.ACTUAL PROD as act', 'datapn38line2s.STATUS as status')
            ->latest('datapn38line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData39line2()
    {
        $data = datapn39line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn39line2s.DC CODE')
            ->select('datapn39line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn39line2s.QTY PROD as qty', \DB::raw('datapn39line2s.[SEQ.NUMBER] as SeqNo'), 'datapn39line2s.ACTUAL PROD as act', 'datapn39line2s.STATUS as status')
            ->latest('datapn39line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData40line2()
    {
        $data = datapn40line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn40line2s.DC CODE')
            ->select('datapn40line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn40line2s.QTY PROD as qty', \DB::raw('datapn40line2s.[SEQ.NUMBER] as SeqNo'), 'datapn40line2s.ACTUAL PROD as act', 'datapn40line2s.STATUS as status')
            ->latest('datapn40line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData41line2()
    {
        $data = datapn41line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn41line2s.DC CODE')
            ->select('datapn41line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn41line2s.QTY PROD as qty', \DB::raw('datapn41line2s.[SEQ.NUMBER] as SeqNo'), 'datapn41line2s.ACTUAL PROD as act', 'datapn41line2s.STATUS as status')
            ->latest('datapn41line2s.id')
            ->first();

        return response()->json($data);
    }
    public function getData42line2()
    {
        $data = datapn42line2::leftjoin('dbflange2s', 'dbflange2s.DC CODE', '=', 'datapn42line2s.DC CODE')
            ->select('datapn42line2s.DC CODE as DCCODE', 'dbflange2s.FLANGENON as FlangeNon', 'dbflange2s.LINE as Line', 'dbflange2s.PART NUMBER as PartNumber', 'datapn42line2s.QTY PROD as qty', \DB::raw('datapn42line2s.[SEQ.NUMBER] as SeqNo'), 'datapn42line2s.ACTUAL PROD as act', 'datapn42line2s.STATUS as status')
            ->latest('datapn42line2s.id')
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
        return view('riwayat.visualisasi');
    }

    public function riwayat2()
    {
        return view('riwayat.visual');
    }
    public function riwayat3()
    {
        return view('riwayat.visualll');
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

