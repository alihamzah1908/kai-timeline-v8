<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.index');
    }
    
    public function blacklist()
    {
        return view('vendor.blacklist');
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



    public function autovendor(Request $request)
    {
        $data = DB::table('public.vendor')
            ->select('vendor_name','vendor_code')
            ->where('vendor_name', 'LIKE', '%' . $request->get('search') . '%')
            ->get();
        $response = array();
        foreach ($data as $val) {
            $response[] = array("vendor_code" => $val->vendor_code, "vendor_name" => $val->vendor_name);
        }
        return response()->json($response);
    }

    public function data()
    {
        $data = DB::select('SELECT * FROM vendor');
        return FacadesDataTables::of($data)
            ->addColumn('action', function ($row) {
                $btn = '<button class="btn btn-sm btn-primary btn-rounded">
                            <i class="uil uil-search"></i>
                        </button>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function data_blacklist()
    {
        $data = DB::select('SELECT * FROM vendor_blacklist');
        return FacadesDataTables::of($data)
            ->addColumn('action', function ($row) {
                $btn = '<button class="btn btn-sm btn-primary btn-rounded">
                            <i class="uil uil-search"></i>
                        </button>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
