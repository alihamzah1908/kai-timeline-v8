<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        // dd($request->all());
        if ($request["realisasi"] == 'ya') {
            foreach ($request["timeline_id"] as $val) {
                $timeline = \App\Models\Timeline::where('timeline_id', $val)->first();
                $data = new \App\Models\SP3();
                $data->timeline_id = $timeline ? $timeline->timeline_id : NULL;
                $data->directorate_cd = $timeline ? $timeline->directorate_cd : Auth::user()->directorate_cd;
                $data->division_cd = $timeline ? $timeline->division_cd : Auth::user()->division_cd;
                $data->department_cd =  $timeline ? $timeline->department_cd : Auth::user()->department_cd;;
                $data->judul_pengadaan = $request["judul_pengadaan"] ? $request["judul_pengadaan"] : $timeline->judul_pengadaan;
                $data->nilai_pr =  $timeline ? $timeline->nilai_pr : str_replace('.', '', $request["nilai_pr"]);
                $data->type_tax =  $timeline ? $timeline->type_tax : str_replace('.', '', $request["nilai_tax"]);
                $data->nilai_tax =  $timeline ? $timeline->nilai_tax : $request["nilai_tax"];
                $data->jenis_barang = $request["jenis_barang"];
                $data->coa = json_encode($request["coa"]);
                // $data->tanggal_pr =  date('Y-m-d H:i:s');
                $data->type_metode =  $request["type_metode"];
                // $data->tanggal_justifikasi = date('Y-m-d H:i:s');
                // $data->tanggal_rab =  date('Y-m-d H:i:s');
                // $data->tanggal_pr =  date('Y-m-d H:i:s');
                $data->tanggal_kak =  date('Y-m-d H:i:s');
                // if ($request["vendor_name"] == ''){
                //     $data->nama_vendor = null;
                // } else {
                //     $data->nama_vendor = $request["vendor_name"];
                // }
                $data->nama_vendor = $request["vendor_name"];
                $data->no_mi = $request["no_mi"];
                $data->no_rab = $request["no_mi"];
                // $data->no_justifikasi = $request["no_justifikasi"];
                $data->no_kak = $request["no_kak"];
                // $data->no_pr = $request["no_pr_ip"];
                $data->proses_st = $request["save"] == 'Save As Draft' ? 'PROSES_DSP3' : 'PROSES_SSP3';
                $data->keterangan = 'KETERANGAN';
                $data->created_by = Auth::user()->id;
                $data->save();
                if ($data) {
                    foreach ($request["no_pr_ip"] as $key => $val) {
                        $npp = new \App\Models\TrxNpp();
                        $npp->sp3_id = $data->sp3_id;
                        $npp->no_pr = $request["no_pr_ip"][$key];
                        $npp->no_rab = $request["no_rab"][$key];
                        $npp->no_justifikasi = $request["no_justifikasi_kebutuhan"][$key];
                        $npp->tanggal_pr = $request["date_pr"][$key];
                        $npp->tanggal_rab = $request["date_rab"][$key];
                        $npp->tanggal_justifikasi = $request["date_justifikasi"][$key];
                        if ($request->file('file_pr') || $request->file('file_rab') || $request->file('file_jus_br')) {
                            // INSERT FILE PR  
                            $file_pr = $request->file('file_pr')[$key];
                            $extension = $file_pr->getClientOriginalExtension();
                            $file_pr_name = 'PR-DOC' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                            $file_pr->move(public_path('file/sp3'), $file_pr_name);
                            $npp->file_pr = $file_pr_name;

                            // INSERT FILE RAB  
                            $file_rab = $request->file('file_rab')[$key];
                            $extension = $file_rab->getClientOriginalExtension();
                            $file_rab_name = 'PR-RAB' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                            $file_rab->move(public_path('file/sp3'), $file_rab_name);
                            $npp->file_rab = $file_rab_name;

                            // INSERT FILE JUSTIFIKASI  
                            $file_just = $request->file('file_jus_br')[$key];
                            $extension = $file_just->getClientOriginalExtension();
                            $file_just_name = 'PR-JUSTIFIKASI-BRG' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                            $file_just->move(public_path('file/sp3'), $file_just_name);
                            $npp->file_justifikasi = $file_just_name;
                        }
                        $npp->save();
                    }
                } else if ($request->hasFile('file')) {
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
                if ($data) {
                    $data2 = \App\Models\SP3::find($data->sp3_id);
                    $data2->no_sp3 = 'OP/' . Auth::user()->division_cd  . '/' . date('Y') . '/' . $data->sp3_id;
                    $data2->save();
                }
            }
        } else {
            $data = new \App\Models\SP3();
            $data->directorate_cd = Auth::user()->directorate_cd;
            $data->division_cd = Auth::user()->division_cd;
            $data->department_cd =  Auth::user()->department_cd;;
            $data->judul_pengadaan = $request["judul_pengadaan"];
            $data->no_sp3 = $request["nomor_sp3"];
            $data->coa = json_encode($request["coa"]);
            $data->nilai_pr = str_replace('.', '', $request["nilai_pr"]);
            $data->type_tax =  $request["type_tax"];
            $data->nilai_tax =  $request["nilai_tax"] ? str_replace('.', '', $request["nilai_tax"]) : 0;
            // $data->tanggal_pr =  date('Y-m-d H:i:s');
            $data->type_metode =  $request["type_metode"];
            // $data->tanggal_justifikasi = date('Y-m-d H:i:s');
            // $data->tanggal_rab =  date('Y-m-d H:i:s');
            // $data->tanggal_pr =  date('Y-m-d H:i:s');
            $data->tanggal_kak =  date('Y-m-d H:i:s');
            $data->nama_vendor = $request["vendor_name"];
            $data->no_mi = $request["no_mi"];
            // $data->no_rab = $request["no_mi"];
            // $data->no_justifikasi = $request["no_justifikasi"];
            $data->no_kak = $request["no_kak"];
            // $data->no_pr = $request["no_pr_ip"];
            $data->proses_st = $request["save"] == 'Save As Draft' ? 'PROSES_DSP3' : 'PROSES_SSP3';
            $data->keterangan = 'KETERANGAN';
            $data->created_by = Auth::user()->id;
            $data->updated_by = Auth::user()->id;
            $data->save();
            if ($data) {
                foreach ($request["no_pr_ip"] as $key => $val) {
                    $npp = new \App\Models\TrxNpp();
                    $npp->sp3_id = $data->sp3_id;
                    $npp->no_pr = $request["no_pr_ip"][$key];
                    $npp->no_rab = $request["no_rab"][$key];
                    $npp->no_justifikasi = $request["no_justifikasi_kebutuhan"][$key];
                    $npp->tanggal_pr = $request["date_pr"][$key];
                    $npp->tanggal_rab = $request["date_rab"][$key];
                    $npp->tanggal_justifikasi = $request["date_justifikasi"];
                    if ($request->file('file_pr') || $request->file('file_rab') || $request->file('file_jus_br')) {
                        // INSERT FILE PR  
                        $file_pr = $request->file('file_pr')[$key];
                        $extension_pr = $file_pr->getClientOriginalExtension();
                        $file_pr_name = 'PR-DOC' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension_pr;
                        $file_pr->move(public_path('file/sp3'), $file_pr_name);
                        $npp->file_pr = $file_pr_name;

                        // INSERT FILE RAB  
                        $file_rab = $request->file('file_rab')[$key];
                        $extension_rab = $file_rab->getClientOriginalExtension();
                        $file_rab_name = 'PR-RAB' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension_rab;
                        $file_rab->move(public_path('file/sp3'), $file_rab_name);
                        $npp->file_rab = $file_rab_name;

                        // INSERT FILE JUSTIFIKASI  
                        $file_just = $request->file('file_jus_br')[$key];
                        $extension_just = $file_just->getClientOriginalExtension();
                        $file_just_name = 'PR-JUSTIFIKASI-BRG' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension_just;
                        $file_just->move(public_path('file/sp3'), $file_just_name);
                        $npp->file_justifikasi = $file_just_name;
                    }
                    $npp->save();
                }
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
        }

        return redirect(route('list.npp'));
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
        $data["trx_npp"] = \App\Models\TrxNpp::where('sp3_id', $id)->get();
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
        $pdf = FacadePdf::loadView('sp-3.evaluasi.print-sp')->setOptions(['defaultFont' => 'roboto']);;
        // return view('sp-3.evaluasi.print-sp');
        return $pdf->download('dasdsa.pdf');
    }

    public function evaluasi_store(Request $request)
    {
        // dd($request->all());
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
        return redirect(route('sp3.show', $request["sp3_id"]));
    }

    public function data(Request $request)
    {
        $sp3 = \App\Models\SP3::orderBy('sp3_id', 'desc');
        if ($request["timeline_type"] == 'approval') {
            $sp3->where('proses_st', 'PROSES_SSP3');
            $sp3->orWhere('proses_st', 'PROSES_ASP3');
            $sp3->orWhere('proses_st', 'PROSES_DRKS');
            $sp3->orWhere('proses_st', 'PROSES_RRKS');
        } elseif ($request["timeline_type"] == 'npp') {
            $sp3->select(DB::raw("sum(nilai_pr) as nilai_pr"), 'department_cd', 'judul_pengadaan', 'no_sp3', 'nilai_tax', 'timeline_id', 'sp3_id', 'proses_st');
            $sp3->groupBy('department_cd', 'nilai_pr', 'judul_pengadaan', 'no_sp3', 'nilai_tax', 'timeline_id', 'sp3_id', 'proses_st');
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
                }
                if ($row->proses_st == 'PROSES_DRKS') {
                    return '<badges class="badge badge-warning">Draft RKS</badges>';
                }
                if ($row->proses_st == 'PROSES_RRKS') {
                    return '<badges class="badge badge-warning">Reviewing RKS</badges>';
                } else if ($row->proses_st == 'PROSES_SSP3') {
                    return '<badges class="badge badge-primary">Submited SP3</badges>';
                } else if ($row->proses_st == 'PROSES_ESP3') {
                    return '<badges class="badge badge-warning">Evaluated SP3</badges>';
                } else if ($row->proses_st == 'PROSES_ASP3') {
                    return '<badges class="badge badge-success">Approved SP3</badges>';
                } else if ($row->proses_st == 'PROSES_RSP3') {
                    return '<badges class="badge badge-danger">Rejected SP3</badges>';
                } else {
                    return $row->proses_st;
                }
            })
            ->addColumn('action', function ($row) {
                if (auth()->user()->can('sp3-list')) {
                    $btn = '<a href="' . route('sp3.show', $row->sp3_id) . '">
                                <button class="btn btn-primary btn-rounded btn-sm">
                                    <i class="uil uil-search"></i> 
                                </button>
                            </a>';
                    return $btn;
                } else {
                    $check = \App\Models\EvaluasiSp3::where('sp3_id', $row->sp3_id)->get();
                    $action = '<a class="approve" role="presentation" href="javascript:void(0)" data-bind=' . $row->sp3_id . '> 
                                    <button class="btn btn-warning btn-sm btn-rounded">
                                        <i class="uil uil-check"></i> 
                                    </button>
                               </a>
                               <a href="' . route('sp3.show', $row->sp3_id) . '">
                                    <button class="btn btn-primary btn-rounded btn-sm">
                                        <i class="uil uil-search"></i> 
                                    </button>
                               </a>';
                    if ($row->proses_st == 'PROSES_SSP3') {
                        $btn = $action;
                        return $btn;
                    } elseif ($row->proses_st == 'PROSES_DRKS') {
                        $btn = '<a href="' . route('sp3.show', $row->sp3_id) . '">
                                    <button class="btn btn-primary btn-rounded btn-sm">
                                        <i class="uil uil-search"></i> 
                                    </button>
                                </a>';
                        return $btn;
                    } elseif ($row->proses_st == 'PROSES_PCP') {
                        $btn = '<a href="' . route('evaluasi.print.sp') . '">
                                    <button class="btn btn-primary btn-sm btn-rounded">
                                        <i class="uil uil-print"></i> 
                                    </button>
                                </a>
                                <a href="' . route('sp3.show', $row->sp3_id) . '">
                                    <button class="btn btn-primary btn-rounded btn-sm">
                                        <i class="uil uil-search"></i> 
                                    </button>
                                </a>';
                        return $btn;
                    }
                }
            })

            ->rawColumns(['action', 'proses_st', 'evaluasi'])
            ->make(true);
    }
}
