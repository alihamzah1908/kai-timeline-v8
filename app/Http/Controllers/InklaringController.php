<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\InklaringImports;

class InklaringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inklaring.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function data(Request $request)
    {
        $data = DB::select('SELECT judul_pengadaan, vendor_name, thn_aggrn_rkap, 
                            jenis_kontrak, no_kontrak, kategori_import, status_monitoring
                            FROM inklaring');
        return DataTables::of($data)
            ->rawColumns(['action'])
            ->make(true);
    }

    public function importInklaring(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file'); //GET FILE
            Excel::import(new InklaringImports, $file); //IMPORT FILE
            return redirect()->back()->with(['message' => 'Upload berhasil']);
        }
        return redirect()->back()->withErrors(['message' => 'Upload gagal']);
    }
}
