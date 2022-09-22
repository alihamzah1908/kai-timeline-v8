<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DataTables;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

class TimelineController extends Controller
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
        // dd($request["nilai_tax"] != 0 || $request["nilai_tax"] != '' ? $request["nilai_tax"] : str_replace('.', '', $request["nilai_tax_sebagian"]));
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
        $data->nilai_tax = $request["nilai_tax"] != 0 || $request["nilai_tax"] != '' ? str_replace('.', '', $request["nilai_tax"]) : str_replace('.', '', $request["nilai_tax_sebagian"]);
        //$data->nilai_tax = str_replace('.', '', $request["nilai_tax"]);
        $data->start_date_pengadaan = $request["start_date"];
        $data->end_date_pengadaan = $request["end_date"];
        $data->proses_st = $request["save"] == 'draft' ? 'PROSES_DT' : 'PROSES_ST';
        $data->created_by = Auth::user()->id;
        $data->save();
        if ($data) {
            $data2 = \App\Models\Timeline::find($data->timeline_id);
            $data2->no_pengadaan = 'OP/' . Auth::user()->division_cd  . '/' . date('Y') . '/' . $data->timeline_id;
            $data2->save();
            return response()->json(['status' => '200']);
        } else {
            return response()->json(['status' => '400']);
        }
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
        $timeline = \App\Models\Timeline::orderBy('created_at', 'desc');
        if ($request["timeline_type"] == 'approval') {
            if ($request["status"] == 'PROSES_AT') {
                $timeline->where('proses_st', 'PROSES_AT');
            } else if ($request["status"] == 'PROSES_ST') {
                $timeline->where('proses_st', 'PROSES_ST');
            } else if ($request["status"] == 'PROSES_CT') {
                $timeline->where('proses_st', 'PROSES_CT');
            } else {
                $timeline->where('proses_st', 'PROSES_ST');
                $timeline->orWhere('proses_st', 'PROSES_AT');
                $timeline->orWhere('proses_st', 'PROSES_CT');
            }
        } else {
            if(Auth::user()->id == 14){
                $timeline;
            }else{
                $timeline->where('directorate_cd', Auth::user()->directorate_cd);
            }
            
        };
        $data = $timeline->get();
        return FacadesDataTables::of($data)
            ->addColumn('no_pengadaan', function ($row) {
                return '<a href="' . route('timeline.show', $row->timeline_id) . '">
                           ' . $row->no_pengadaan . '
                        </a>';
            })
            ->addColumn('nilai_pr', function ($row) {
                return number_format($row->nilai_pr, 0);
            })
            ->addColumn('type_tax', function ($row) {
                if ($row->type_tax == '1') {
                    return 'Pajak Tidak Dipungut';
                } else if ($row->type_tax == '2') {
                    return 'Pajak Dipungut';
                } else if ($row->type_tax == '3') {
                    return 'Pajak Dipungut Sebagian';
                }
            })
            ->addColumn('nilai_tax', function ($row) {
                //return $row->nilai_tax . '%';
                return number_format($row->nilai_tax, 0);
            })
            ->addColumn('start_date_pengadaan', function ($row) {
                return date('d M Y', strtotime($row->start_date_pengadaan));
            })
            ->addColumn('end_date_pengadaan', function ($row) {
                return date('d M Y', strtotime($row->end_date_pengadaan));
            })
            ->addColumn('jenis_kontrak', function ($row) {
                if ($row->jenis_kontrak == 'single_year') {
                    return 'SINGLE YEAR';
                } else if ($row->jenis_kontrak == 'multi_year') {
                    return 'MULTI YEAR';
                }
            })
            ->addColumn('proses_st', function ($row) {
                if ($row->proses_st == 'PROSES_DT') {
                    return '<badges class="badge badge-danger">Draft Timeline</badges>';
                } else if ($row->proses_st == 'PROSES_AT') {
                    return '<badges class="badge badge-danger">Approved Timeline</badges>';
                } else if ($row->proses_st == 'PROSES_CT') {
                    return '<badges class="badge badge-danger">Canceled Timeline</badges>';
                } else if ($row->proses_st == 'PROSES_ST') {
                    return '<badges class="badge badge-danger">Submitted Timeline</badges>';
                }
            })
            ->addColumn('action', function ($row) {
                if (auth()->user()->can('timeline-list') || $row->proses_st == 'PROSES_CT' || $row->proses_st == 'PROSES_AT') {
                    $btn = '<a href="' . route('timeline.show', $row->timeline_id) . '">
                                <button class="btn btn-primary btn-rounded btn-sm">
                                    <i class="uil uil-search"></i>
                                </button>
                            </a>';
                    return $btn;
                } else {
                    $btn = '<a href="' . route('timeline.show', $row->timeline_id) . '">
                                <button class="btn btn-sm btn-primary btn-rounded">
                                    <i class="uil uil-search"></i>
                                </button>
                            </a>
                            <button class="btn btn-warning btn-rounded btn-sm approve" data-bind="' . $row->timeline_id . '"><i class="uil uil-check"></i> </button></a>
                            <button class="btn btn-primary btn-rounded btn-sm reject" data-bind="' . $row->timeline_id . '"><i class="uil uil-multiply"></i> </button></a>';
                    return $btn;
                }
            })
            ->rawColumns(['action', 'proses_st', 'no_pengadaan'])
            ->make(true);
    }
}
