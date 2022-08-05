<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DataTables;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;
use Illuminate\Support\Facades\DB;

class HsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = new \App\Models\Timeline();
        $data->directorate_cd = Auth::user()->directorate_cd;
        $data->division_cd = Auth::user()->division_cd;
        $data->department_cd =  Auth::user()->department_cd;
        $data->judul_pengadaan = $request["judul_pengadaan"];
        $data->sumber_dana = 'RKAP ' . $request["sumber_dana"];
        $data->jenis_kontrak = $request["jenis_kontrak"];
        $data->beban_biaya = $request["beban_biaya"];
        $data->pbj = $request["pbj"];
        $data->nilai_pr = str_replace('.', '', $request["nilai_pr"]);
        $data->type_tax = $request["type_tax"];
        $data->nilai_tax = $request["nilai_tax"];
        //$data->nilai_tax = str_replace('.', '', $request["nilai_tax"]);
        $data->start_date_pengadaan = $request["start_date"];
        $data->end_date_pengadaan = $request["end_date"];
        $data->proses_st = $request["save"] == 'draft' ? 'PROSES_DT' : 'PROSES_ST';
        $data->created_by = Auth::user()->id;
        $data->save();
        $data2 = \App\Models\Timeline::find($data->timeline_id);
        $data2->no_pengadaan = 'OP/' . Auth::user()->division_cd  . '/' . date('Y') . '/' . $data->timeline_id;
        $data2->save();
        return response()->json(['status' => '200']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data["data"] = \App\Models\Timeline::find($id);
        return view('timeline.list-timeline.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function approve(Request $request)
    {
        $data = \App\Models\Timeline::where('timeline_id', $request["timeline_id"])->first();
        if ($data) {
            $timeline = \App\Models\Timeline::find($request["timeline_id"]);
            $timeline->proses_st = 'PROSES_AT';
            $timeline->save();
            return response()->json(['status' => '200']);
        } else {
            return response()->json(['status' => '400']);
        }
    }

    public function reject(Request $request)
    {
        $data = \App\Models\Timeline::where('timeline_id', $request["timeline_id"])->first();
        if ($data) {
            $timeline = \App\Models\Timeline::find($request["timeline_id"]);
            $timeline->proses_st = 'PROSES_CT';
            $timeline->save();
            return response()->json(['status' => '200']);
        } else {
            return response()->json(['status' => '400']);
        }
    }

    public function get_timeline()
    {
        $data = \App\Models\Timeline::where('proses_st', 'PROSES_AT')->get();
        return response()->json($data);
    }

    public function data(Request $request)
    {
        $data = DB::select('SELECT hs_id, material_no, nama_barang_upah, kategori, merk, spesifiaksi, satuan, harga, mata_uang, referensi, remark_harga_tahun
            FROM trx_harga_satuan
            ORDER BY kategori asc');
        return FacadesDataTables::of($data)
        ->addColumn('harga', function ($row) {
            return number_format($row->harga, 0);
        })
        ->make(true);
        //dd($data["data"]);
    }
}
