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
                // dd($timeline);
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
                $data->type_metode =  $request["type_metode"];
                $data->tanggal_kak =  date('Y-m-d H:i:s');
                $data->nama_vendor = json_encode($request["vendor_name"]);
                $data->no_mi = $request["no_mi"];
                $data->tanggal_mi = $request["date_mi"];
                $data->perihal_mi = $request["perihal_mi"];
                $data->no_rab = $request["no_mi"];
                $data->no_justifikasi = $request["no_justifikasi_pemilihan"];
                $data->tanggal_justifikasi_pemilihan = $request["date_justifikasi_pemilihan"];
                $data->no_kak = $request["no_kak"];
                $data->proses_st = $request["save"] == 'Save As Draft' ? 'PROSES_DSP3' : 'PROSES_SSP3';
                $data->keterangan = 'KETERANGAN';
                $data->created_by = Auth::user()->id;
                $data->save();
                if ($data) {
                    foreach ($request["no_pr_ip"] as $key => $val) {
                        $npp = new \App\Models\TrxNpp();
                        $npp->sp3_id = $data->sp3_id;
                        $npp->no_pr = $request["no_pr_ip"][$key];
                        $npp->nominal_pr_ip = str_replace('.', '', $request["nominal_pr_ip"][$key]);
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
                    $data2->no_sp3 = $data->sp3_id . '/' . 'REN-LOG' . '/' . 'KCI' . '/' . numberToRomanRepresentation(date('m')) . '/' . date('Y');
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
            $data->type_metode =  $request["type_metode"];
            $data->tanggal_kak =  date('Y-m-d H:i:s');
            $data->nama_vendor = json_encode($request["vendor_name"]);
            $data->no_mi = $request["no_mi"];
            $data->tanggal_mi = $request["date_mi"];
            $data->perihal_mi = $request["perihal_mi"];
            $data->no_justifikasi = $request["no_justifikasi_pemilihan"];
            $data->tanggal_justifikasi_pemilihan = $request["date_justifikasi_pemilihan"];
            $data->no_kak = $request["no_kak"];
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
                    $npp->nominal_pr_ip = str_replace('.', '', $request["nominal_pr_ip"][$key]);
                    $npp->no_rab = $request["no_rab"][$key];
                    $npp->no_justifikasi = $request["no_justifikasi_kebutuhan"][$key];
                    $npp->tanggal_pr = $request["date_pr"][$key];
                    $npp->tanggal_rab = $request["date_rab"][$key];
                    $npp->tanggal_justifikasi = $request["date_justifikasi"][$key];
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
                $data2->no_sp3 = $data->sp3_id . '/' . 'REN-LOG' . '/' . 'KCI' . '/' . numberToRomanRepresentation(date('m')) . '/' . date('Y');
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
        $where = json_decode($data["data"]["nama_vendor"]) ? json_decode($data["data"]["nama_vendor"]) : [];
        // dd($where);
        $data["vendor"] = DB::table('vendor')
            ->select('vendor_name')
            ->whereIn('vendor_code', $where)
            ->get();
        $data["trx_npp"] = \App\Models\TrxNpp::where('sp3_id', $id)->get();
        $check = \App\Models\EvaluasiSp3::where('sp3_id', $id)->get();
        if ($check->count() > 0) {
            $data["evaluasi"] = \App\Models\EvaluasiSp3::where('sp3_id', $id)->get();
        } else {
            $data["evaluasi"] = null;
        }
        $data["evalnotes"] = DB::table('trx_eval_notes')->where('sp3_id', $id)->first();
        $data["summary"] = DB::table('trx_summary_contract')->where('sp3_id', $id)->first();
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

    public function generate_sk(Request $request)
    {
        $data["spr"] = \App\Models\TrxSpr::where('sp3_id', $request["id"])->first();
        $data["data"] = \App\Models\SP3::where('sp3_id', $request["id"])->first();
        $data["vendor"] = DB::table('trx_penetapan_pemenang as a')
            ->select('a.*', 'b.vendor_name', 'b.vendor_code', 'b.street', 'b.city', 'b.postal_code')
            ->leftJoin('vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->where('a.sp3_id', $request["id"])
            ->first();
        $data["negosiasi"] = DB::table('trx_klasifikasi_konfirmasi_negosiasi as a')
            ->select('a.*', 'b.vendor_name', 'b.vendor_code')
            ->leftJoin('vendor as b', 'a.vendor_code', 'b.vendor_code', 'b.street', 'b.city', 'b.postal_code')
            ->where('a.sp3_id', $request["id"])
            ->first();
        $resultName = date('Ymd_His') . "_SURAT_KEPUTUSAN.pdf";
        $view       = view('sp-3.evaluasi.print-sk', $data)->render();
        // return $view;
        $pdf        = FacadePdf::loadHtml($view);
        $pdf->setOptions(['isHtml5ParserEnabled' => true, 'setIsRemoteEnabled' => true]);
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream($resultName);
    }

    public function generate_sp(Request $request)
    {
        // $data["evaluasi"] = \App\Models\EvaluasiSp3::where('sp3_id', $request["id"])
        //     ->orderBy('eval_sp3_id', 'desc')
        //     ->get();
        $data["data"] = \App\Models\SP3::find($request["id"]);
        // dd($data["data"]);
        $data["timeline"] = \App\Models\Timeline::where('timeline_id', $data["data"]["timeline_id"])->first();
        $data["npp"] = \App\Models\TrxNpp::where('sp3_id', $request["id"])->get();
        $check = \App\Models\EvaluasiSp3::where('sp3_id', $request["id"])->get();
        if ($check->count() > 0) {
            $data["evaluasi"] = \App\Models\EvaluasiSp3::where('sp3_id', $request["id"])
                ->orderBy('eval_sp3_id', 'asc')
                ->get();
        } else {
            $data["evaluasi"] = null;
        }
        $data["evalnotes"] = DB::table('trx_eval_notes')->where('sp3_id', $request["id"])->first();
        if ($data) {
            $resultName = date('Ymd_His') . "_SURAT_PERINTAH.pdf";
            $view       = view('sp-3.evaluasi.sp', $data)->render();
            // return $view;
            $pdf        = FacadePdf::loadHtml($view);
            $pdf->setOptions(['isHtml5ParserEnabled' => true, 'setIsRemoteEnabled' => true]);
            $pdf->setPaper('A4', 'potrait');
            return $pdf->stream($resultName);
        }
    }

    public function evaluasi_store(Request $request)
    {
        // dd($request->all());
        foreach ($request["item_value"] as $key => $val) {
            $data = new \App\Models\EvaluasiSp3();
            $data->sp3_id = $request["sp3_id"];
            $data->tanggal_evaluasi = $request["tanggal"][$key];
            $data->nomor_evaluasi = $request["nomor"][$key];
            // $data->item_cd = $request["item_cd"][$key];
            $data->item_value = $request["item_value"][$key];
            $data->pemenuhan = $request["pemenuhan"][$key];
            $data->keterangan = $request["keterangan"][$key];
            $data->created_by = Auth::user()->id;
            $data->save();
        }
        $notes = new \App\Models\TrxEvalNotes();
        $notes->sp3_id = $request["sp3_id"];
        $notes->catatan_evaluasi = $request["catatan_evaluasi"];
        $data->created_by = Auth::user()->id;
        $notes->save();
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
            $sp3->orWhere('proses_st', 'PROSES_DRKS');
            $sp3->orWhere('proses_st', 'PROSES_PP');
            $sp3->orWhere('proses_st', 'PROSES_AL');
            $sp3->orWhere('proses_st', 'PROSES_PDP');
            $sp3->orWhere('proses_st', 'PROSES_PPDP');
            $sp3->orWhere('proses_st', 'PROSES_EP');
            $sp3->orWhere('proses_st', 'PROSES_EDH');
            $sp3->orWhere('proses_st', 'PROSES_UPCP');
            $sp3->orWhere('proses_st', 'PROSES_PCP');
            $sp3->orWhere('proses_st', 'PROSES_PGL');
            $sp3->orWhere('proses_st', 'SPR');
            $sp3->orWhere('proses_st', 'PROSES_DC');
            $sp3->orWhere('proses_st', 'PROSES_UJP');
            $sp3->orWhere('proses_st', 'PROSES_VJP');
            $sp3->orWhere('proses_st', 'PROSES_RDC');
            $sp3->orWhere('proses_st', 'PROSES_VAC');
            $sp3->orWhere('proses_st', 'PROSES_ALG');
            $sp3->orWhere('proses_st', 'PROSES_APU');
            $sp3->orWhere('proses_st', 'PROSES_KAC');
            $sp3->orWhere('proses_st', 'PROSES_CR');
        } elseif ($request["timeline_type"] == 'npp') {
            $sp3->select(DB::raw("sum(nilai_pr) as nilai_pr"), 'department_cd', 'judul_pengadaan', 'no_sp3', 'nilai_tax', 'timeline_id', 'sp3_id', 'proses_st', 'created_at');
            $sp3->groupBy('department_cd', 'nilai_pr', 'judul_pengadaan', 'no_sp3', 'nilai_tax', 'timeline_id', 'sp3_id', 'proses_st', 'created_at');
        }
        $data = $sp3->get();
        return FacadesDataTables::of($data)
            ->addColumn('no_sp3', function ($row) {
                return '<a href="' . route('sp3.show', $row->sp3_id) . '">
                           ' . $row->no_sp3 . '
                        </a>';
            })
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
                return '<badges class="badge badge-danger">' . $row->get_status->keterangan . '</badges>';
            })
            ->addColumn('action', function ($row) {
                $evaluasi = \App\Models\EvaluasiSp3::where('sp3_id', $row->sp3_id)->get();
                if (auth()->user()->hasRole('manajer_logistic_sarana') ||  auth()->user()->hasRole('manajer_logistic_nonsarana') ||  auth()->user()->hasRole('Manajer Logistik')) {
                    if ($row->proses_st == 'PROSES_SSP3') {
                        $approve = '<a class="approve" role="presentation" href="javascript:void(0)" data-bind=' . $row->sp3_id . '> 
                                        <button class="btn btn-warning btn-sm btn-rounded">
                                            <i class="uil uil-check"></i> 
                                        </button>
                                </a>';
                    } else {
                        $approve = false;
                    }
                    $action1 = $approve . ' ' . '
                               <a href="' . route('sp3.show', $row->sp3_id) . '" target="_blank">
                                    <button class="btn btn-primary btn-rounded btn-sm">
                                        <i class="uil uil-search"></i> 
                                    </button>
                                </a>
                                <a href="' . route('evaluasi.print.sp') . '?id=' . $row->sp3_id . '" target="_blank">
                                    <button class="btn btn-primary btn-sm btn-rounded">
                                        <i class="uil uil-print"></i> 
                                    </button>
                                  </a>';
                    return $action1;
                } else if (auth()->user()->hasRole('manajer_user')) {
                    $action = '<a href="' . route('sp3.show', $row->sp3_id) . '" target="_blank">
                                    <button class="btn btn-primary btn-rounded btn-sm">
                                        <i class="uil uil-search"></i> 
                                    </button>
                                </a>
                                <a href="' . route('evaluasi.print.sp') . '?id=' . $row->sp3_id . '" target="_blank">
                                    <button class="btn btn-primary btn-sm btn-rounded">
                                        <i class="uil uil-print"></i> 
                                    </button>
                                </a>';
                    return $action;
                } else if (
                    $row->proses_st == 'PROSES_PCP' || $row->proses_st == 'SPR' || $row->proses_st == 'PROSES_DC'
                    || $row->proses_st == 'PROSES_UJP' || $row->proses_st == 'PROSES_VJP' || $row->proses_st == 'PROSES_RDC'
                    || $row->proses_st == 'PROSES_VAC' || $row->proses_st == 'PROSES_ALG' || $row->proses_st == 'PROSES_KAC'
                    || $row->proses_st == 'PROSES_CR'
                ) {
                    $action = '<a href="' . route('sp3.show', $row->sp3_id) . '">
                                <button class="btn btn-primary btn-rounded btn-sm">
                                    <i class="uil uil-search"></i> 
                                </button>
                            </a>
                            <a href="' . route('evaluasi.print.sp') . '?id=' . $row->sp3_id . '" target="_blank">
                                <button class="btn btn-primary btn-sm btn-rounded">
                                    <i class="uil uil-print"></i> 
                                </button>
                            </a>';
                    return $action;
                }
            })

            ->rawColumns(['action', 'proses_st', 'evaluasi', 'no_sp3'])
            ->make(true);
    }
}
