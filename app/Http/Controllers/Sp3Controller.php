<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

class Sp3Controller extends Controller
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
        if ($request["realisasi"] == 'ya') {
            $timeline = \App\Models\Timeline::where('timeline_id', $request["timeline_id"])->first();
        } else {
            $timeline = false;
        }
        $data = new \App\Models\SP3();
        $data->timeline_id = $timeline ? $timeline->timeline_id : NULL;
        $data->directorate_cd = $timeline ? $timeline->directorate_cd : Auth::user()->directorate_cd;
        $data->division_cd = $timeline ? $timeline->division_cd : Auth::user()->division_cd;
        $data->department_cd =  $timeline ? $timeline->department_cd : Auth::user()->department_cd;;
        $data->judul_pengadaan = $timeline ? $timeline->judul_pengadaan : $request["judul_pengadaan"];
        $data->no_sp3 = $request["nomor_sp3"];
        // $data->sumber_dana =  $timeline ? $timeline->sumber_dana : $request["sumber_dana"];
        // $data->jenis_kontrak =  $timeline ? $timeline->jenis_kontrak : $request["jenis_kontrak"];
        // $data->beban_biaya =  $timeline ? $timeline->beban_biaya : $request["beban_biaya"];
        // $data->pbj =  $timeline ? $timeline->pbj : $request["pbj"];
        $data->nilai_pr =  $timeline ? $timeline->nilai_pr : $request["nilai_pr"];
        $data->type_tax =  $timeline ? $timeline->type_tax : $request["type_tax"];
        $data->nilai_tax =  $timeline ? $timeline->nilai_tax : $request["nilai_tax"];
        $data->tanggal_pr =  date('Y-m-d H:i:s');
        $data->type_metode =  $request["type_metode"];
        $data->tanggal_justifikasi = date('Y-m-d H:i:s');
        $data->tanggal_rab =  date('Y-m-d H:i:s');
        $data->tanggal_pr =  date('Y-m-d H:i:s');
        $data->tanggal_kak =  date('Y-m-d H:i:s');
        $data->nama_vendor = $request["vendor_name"];
        $data->no_mi = $request["no_mi"];
        $data->no_rab = $request["no_mi"];
        $data->no_justifikasi = $request["no_justifikasi"];
        $data->no_kak = $request["no_kak"];
        $data->no_pr = $request["no_pr_ip"];
        $data->proses_st = $request["save"] == 'Save As Draft' ? 'PROSES_DSP3' : 'PROSES_SSP3';
        $data->keterangan = 'KETERANGAN';
        $data->created_by = Auth::user()->id;
        $data->updated_by = Auth::user()->id;
        $data->save();
        if ($data) {
            $data2 = \App\Models\SP3::find($data->sp3_id);
            $data2->no_sp3 = 'OP/' . Auth::user()->division_cd  . '/' . date('Y') . '/' . $data->sp3_id;
            $data2->save();
        }
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            foreach ($file as $val) {
                $files = new \App\Models\SP3_File();
                $files->sp3_id = $data->sp3_id;
                $extension = $val->getClientOriginalExtension();
                $new_name = 'SP3' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $val->move(public_path('file/sp3'), $new_name);
                $files->file = $new_name;
                $files->save();
            }
        }
        return redirect(route('list.sp3'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data["data"] = \App\Models\SP3::find($id);
        return view('sp-3.list-sp3.show', $data);
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

    public function form_evaluasi($id)
    {
        $data["data"] = \App\Models\SP3::find($id);
        return view('sp-3.evaluasi.form', $data);
    }

    public function approve(Request $request)
    {
        $data = \App\Models\SP3::where('sp3_id', $request["sp3_id"])->first();
        if ($data) {
            $timeline = \App\Models\SP3::find($request["sp3_id"]);
            $timeline->proses_st = 'PROSES_DRKS';
            $timeline->save();
            return response()->json(['status' => '200']);
        } else {
            return response()->json(['status' => '400']);
        }
    }

    public function reject(Request $request)
    {
        $data = \App\Models\Timeline::where('sp3_id', $request["sp3_id"])->first();
        if ($data) {
            $timeline = \App\Models\Timeline::find($request["sp3_id"]);
            $timeline->proses_st = 'PROSES_RSP3';
            $timeline->save();
            return response()->json(['status' => '200']);
        } else {
            return response()->json(['status' => '400']);
        }
    }

    public function generate_sp()
    {
        $pdf = FacadePdf::loadView('sp-3.evaluasi.print-sp');
        return $pdf->download('pelayanan-penumpang.pdf');
    }

    public function evaluasi_store(Request $request)
    {
        dd($request->all());
        foreach ($request["pemenuhan"] as $key => $val) {
            $data = new \App\Models\EvaluasiSp3();
            $data->sp3_id = $request["sp3_id"];
            $data->tanggal_evaluasi = $request["tanggal"][$key];
            $data->nomor_evaluasi = $request["nomor"][$key];
            // $data->item_cd = $request["item_cd"][$key];
            $data->item_value = $request["item_value"][$key];
            $data->pemenuhan = $val;
            $data->keterangan = $request["keterangan"][$key];
            $data->created_by = Auth::user()->id;
            $data->save();
        }
        return redirect(route('sp3.task.approval'));
    }

    public function data(Request $request)
    {
        $sp3 = \App\Models\SP3::orderBy('sp3_id', 'desc');
        if ($request["timeline_type"] == 'approval') {
            $sp3->where('proses_st', 'PROSES_SSP3');
            $sp3->orWhere('proses_st', 'PROSES_ASP3');
        }
        $data = $sp3->get();
        return FacadesDataTables::of($data)
            ->addColumn('nilai_pr', function ($row) {
                return number_format($row->nilai_pr, 2);
            })
            ->addColumn('evaluasi', function ($row) {
                $evaluasi = \App\Models\EvaluasiSp3::where('sp3_id', $row->sp3_id)->count();
                if ($evaluasi > 0) {
                    return '<span class="text-danger">Evaluated</span>';
                } else {
                    return '<span class="text-warning">Not Evaluated</span>';
                }
            })
            ->addColumn('type_tax', function ($row) {
                if ($row->type_tax == '1') {
                    return 'Pajak Tidak Dipungut';
                } else if ($row->type_tax == '2') {
                    return 'Pajak Dipungut (11%)';
                } else if ($row->type_tax == '3') {
                    return 'Pajak Dipungut Sebagian';
                }
            })
            ->addColumn('nilai_tax', function ($row) {
                return number_format($row->nilai_tax, 2);
            })
            ->addColumn('start_date_pengadaan', function ($row) {
                return date('d M Y', strtotime($row->start_date_pengadaan));
            })
            ->addColumn('end_date_pengadaan', function ($row) {
                return date('d M Y', strtotime($row->end_date_pengadaan));
            })
            ->addColumn('realisasi', function ($row) {
                return $row->timeline_id != '' ? 'YES (TIMELINE)' : 'NO (TIMELINE)';
            })
            ->addColumn('proses_st', function ($row) {
                if ($row->proses_st == 'PROSES_DSP3') {
                    return '<badges class="badge badge-warning">Draft SP3</badges>';
                } else if ($row->proses_st == 'PROSES_SSP3') {
                    return '<badges class="badge badge-primary">Submited SP3</badges>';
                } else if ($row->proses_st == 'PROSES_ESP3') {
                    return '<badges class="badge badge-warning">Evaluated SP3</badges>';
                } else if ($row->proses_st == 'PROSES_ASP3') {
                    return '<badges class="badge badge-success">Approved SP3</badges>';
                } else if ($row->proses_st == 'PROSES_RSP3') {
                    return '<badges class="badge badge-danger">Rejected SP3</badges>';
                }
            })
            ->addColumn('action', function ($row) {
                if (auth()->user()->can('sp3-list')) {
                    $btn = '<a href="' . route('sp3.show', $row->sp3_id) . '">
                                <button class="btn btn-primary btn-rounded btn-sm">
                                <i class="uil uil-search"></i> Show Detail</button>
                            </a>';
                    return $btn;
                } else {
                    $check = \App\Models\EvaluasiSp3::where('sp3_id', $row->sp3_id)->get();
                    if ($check->count() > 0) {
                        $action = '<a href="' . route('sp3.show', $row->sp3_id) . '">
                                        <button class="btn btn-primary btn-rounded btn-sm">
                                            <i class="uil uil-search"></i> Show Detail
                                        </button>
                                   </a>
                                   <a class="show-evaluasi" role="presentation" href="' . route('evaluasi.sp3') . '?sp_id=' . $row->sp3_id . '"> 
                                        <button class="btn btn-primary btn-sm btn-rounded"><i class="uil uil-search"></i> Show Evaluasi </button>
                                   </a>
                                   <a class="approve" role="presentation" href="javascript:void(0)" data-bind=' . $row->sp3_id . '> 
                                        <button class="btn btn-warning btn-sm btn-rounded">
                                        <i class="uil uil-check"></i> Approve</button>
                                   </a>';
                    } else {
                        $action = '<a href="' . route('sp3.show', $row->sp3_id) . '">
                                        <button class="btn btn-primary btn-rounded btn-sm">
                                            <i class="uil uil-search"></i> Show Detail
                                        </button>
                                   </a>
                                   <a role="presentation" href="' . route('evaluasi.form', $row->sp3_id) . '">
                                        <button class="btn btn-success btn-sm btn-rounded">
                                            <i class="uil uil-table"></i> Evaluasi
                                        </button>
                                   </a>';
                    }
                    if ($row->proses_st == 'PROSES_SSP3') {
                        $btn = $action;
                        return $btn;
                    } elseif ($row->proses_st == 'PROSES_ASP3') {
                        $btn = '<a href="' . route('evaluasi.print.sp') . '"><button class="btn btn-primary btn-sm btn-rounded"><i class="uil uil-print"></i> Print SP </button></a>';
                        return $btn;
                    }
                }
            })

            ->rawColumns(['action', 'proses_st', 'evaluasi'])
            ->make(true);
    }
}
