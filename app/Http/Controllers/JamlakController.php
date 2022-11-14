<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

class JamlakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jamlak.index');
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
        // dd($request->file('file_draft'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data["arr"] = DB::select('SELECT * FROM trx_pbj_contract_report WHERE report_pbj_contract_id=' . $id . '');
        $data["arr"] = DB::select('select tj.performance_contract_id, tj.sp3_id, ts.judul_pengadaan, ts.no_sp3, ts.type_metode, tj.nilai_jaminan, tj.no_bank_garansi, tj.bank_name, tj.tanggal_terbit_jamlak, tj.start_berlaku, tj.end_berlaku, tj.status_jamlak, tj.file_performance_contract,
        tj.catatan from public.trx_jaminan_contract tj
        inner join public.trx_sp3 ts
        on tj.sp3_id = ts.sp3_id
        where ts.sp3_id=' . $id . '');
        $data["data"] = $data["arr"][0];
        // dd($data["data"]);
        return view('jamlak.show', $data);
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

    public function ubah_tanggal_jamlak(Request $request)
    {
        $data = \App\Models\TrxJaminanContract::find($request["performance_contract_id"]);
        $data->start_berlaku = $request["start_date"];
        $data->end_berlaku = $request["end_date"];
        $data->catatan = $request["catatan"];
        $data->status_jamlak = $request["status_jamlak"];
        $data->save();
        return redirect(route('jamlak.index'));
    }

    public function data(Request $request)
    {
        $data = DB::select('select tj.sp3_id, ts.judul_pengadaan, ts.no_sp3, ts.type_metode, tj.nilai_jaminan, tj.no_bank_garansi, tj.bank_name,
        tj.tanggal_terbit_jamlak, tj.start_berlaku, tj.end_berlaku, tj.status_jamlak , tj.created_at
        from public.trx_jaminan_contract tj
        inner join public.trx_sp3 ts
        on tj.sp3_id = ts.sp3_id');
        return FacadesDataTables::of($data)
            ->addColumn('status_jamlak', function ($row) {
                $status = '<badges class="badge badge-danger">' . $row->status_jamlak . '</badges>';
                return $status;
            })
            ->addColumn('action', function ($row) {
                $btn = '<a href="' . route('jamlak.show', $row->sp3_id) . '">
                            <button class="btn btn-sm btn-primary btn-rounded">
                                <i class="uil uil-search"></i>
                            </button>
                        </a>';
                return $btn;
            })
            ->rawColumns(['action','status_jamlak'])
            ->make(true);
    }
}
