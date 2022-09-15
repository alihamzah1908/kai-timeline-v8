<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imports\WarehouseImport;
use App\Imports\WasteImport;
use Maatwebsite\Excel\Facades\Excel;

use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('warehouse.index');
    }

    public function card()
    {
        return view('warehouse.card');
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
        $warehouse = \App\Models\WarehousePart::where('value_unrestricted', '!=', '0')
            ->orderBy('warehouse_part_id');
        if ($request["code"]) {
            $warehouse->where('sloc', $request["code"]);
        }
        $data = $warehouse->get();
        return FacadesDataTables::of($data)
            ->addColumn('value_unrestricted', function ($row) {
                return number_format($row->value_unrestricted, 2, ',', '.');
            })
            ->addColumn('action', function ($row) {
                $btn = '<button class="btn btn-sm btn-primary btn-rounded">
                            <i class="uil uil-search"></i>
                        </button>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function data_card(Request $request)
    {
        $data = \App\Models\WarehousePart::where('value_unrestricted', '!=', '0')
            ->orderBy('warehouse_part_id')
            ->where('sloc', 'C012')
            ->get();
        return FacadesDataTables::of($data)
            ->addColumn('value_unrestricted', function ($row) {
                return number_format($row->value_unrestricted, 2, ',', '.');
            })
            ->addColumn('action', function ($row) {
                $btn = '<button class="btn btn-sm btn-primary btn-rounded">
                            <i class="uil uil-search"></i>
                        </button>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function importWarehouse(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file'); //GET FILE
            Excel::import(new WarehouseImport, $file); //IMPORT FILE
            return redirect()->back()->with(['message' => 'Upload berhasil']);
        }
        return redirect()->back()->withErrors(['message' => 'Upload gagal']);
    }

    public function importWaste(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file'); //GET FILE
            Excel::import(new WasteImport, $file); //IMPORT FILE
            return redirect()->back()->with(['message' => 'Upload berhasil']);
        }
        return redirect()->back()->withErrors(['message' => 'Upload gagal']);
    }
}
