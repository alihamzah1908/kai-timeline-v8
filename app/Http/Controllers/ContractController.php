<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contract.index');
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
        if ($request->hasFile('file')) {
            // PROPOSAL/TEMPLATE FILE
            $file = $request->file('file');
            $files = new \App\Models\DraftRks();
            $files->sp3_id = $request["sp3_id"];
            $extension = $file->getClientOriginalExtension();
            $new_name = 'SP3' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
            $file->move(public_path('file/rks'), $new_name);
            $files->file = $new_name;

            // DRAFT FILE
            $file_draft = $request->file('file_draft');
            // dd($file_draft);
            $extension_draft = $file_draft->getClientOriginalExtension();
            $new_name_draft = 'SP3' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension_draft;
            $file_draft->move(public_path('file/rks'), $new_name_draft);
            $files->file_draft = $new_name_draft;
            $files->save();
            if ($files) {
                return response()->json(["status" => 200]);
            } else {
                return response()->json(["status" => 400]);
            }
        } elseif ($request["penjadwalan"]) {
            $jadwal = new \App\Models\TrxJadwalPelaksaan();
            $jadwal->sp3_id = $request["sp3_id"];
            $jadwal->penjelasan_start_date = $request["penjelasan_start_date"];
            $jadwal->penjelasan_end_date = $request["penjelasan_end_date"];
            $jadwal->pemasukan_start_date = $request["pemasukan_start_date"];
            $jadwal->pemasukan_end_date = $request["pemasukan_end_date"];
            $jadwal->penawaran_start_date = $request["penawaran_start_date"];
            $jadwal->penawaran_end_date = $request["penawaran_end_date"];
            $jadwal->evaluasi_start_date = $request["evaluasi_start_date"];
            $jadwal->evaluasi_end_date = $request["evaluasi_end_date"];
            $jadwal->pengumuman_start_date = $request["pengumuman_start_date"];
            $jadwal->pengumuman_end_date = $request["pengumuman_end_date"];
            $jadwal->tandatangan_start_date = $request["tandatangan_start_date"];
            $jadwal->tandatangan_end_date = $request["tandatangan_end_date"];
            $jadwal->created_by = Auth::user()->id;
            $jadwal->updated_by = Auth::user()->id;
            $jadwal->save();
            if ($jadwal) {
                return response()->json(["status" => 200]);
            } else {
                return response()->json(["status" => 400]);
            }
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
        $data["arr"] = DB::select('SELECT * FROM trx_pbj_contract_report WHERE report_pbj_contract_id=' . $id . '');
        $data["data"] = $data["arr"][0];
        $data["trx_draft"] = \App\Models\TrxDraftContract::where('report_pbj_contract_id', $id)->get();
        $data["trx_jaminan"] = \App\Models\TrxJaminanContract::where('report_pbj_contract_id', $id)->get();
        $data["trx_verifikasi"] = \App\Models\TrxVerifikasiContract::where('report_pbj_contract_id', $id)->get();
        $data["trx_review"] = \App\Models\TrxReviewContract::where('report_pbj_contract_id', $id)->get();
        $data["trx_vendor"] = \App\Models\TrxVendorContract::where('report_pbj_contract_id', $id)->get();
        $data["trx_kci"] = \App\Models\TrxKciContract::where('report_pbj_contract_id', $id)->get();
        return view('contract.show', $data);
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

    public function draft_kontrak(Request $request)
    {
        // dd($request->all());
        $contract = \App\Models\TrxPbjReportContract::find($request["id"]);
        if ($request["status"] == 'PROSES_DC') {
            $trx_contract = new \App\Models\TrxDraftContract();
            $trx_contract->report_pbj_contract_id = $contract->report_pbj_contract_id;
            $trx_contract->sp3_id = $contract->sp3_id;
            if ($request->hasFile('file_draft')) {
                $file = $request->file('file_draft');
                $extension = $file->getClientOriginalExtension();
                $new_name = 'file-draft-contract' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $file->move(public_path('file/contract'), $new_name);
                $trx_contract->file_draft_contract = $new_name;
            }
            $trx_contract->tanggal_submit = $request["tanggal_submit_draft"];
            $trx_contract->created_by = Auth::user()->id;
            $trx_contract->save();
            if ($trx_contract) {
                $contract->contract_status = 'PROSES_UJP';
            }
        } else if ($request["status"] == 'PROSES_UJP') {
            $trx_contract = new \App\Models\TrxJaminanContract();
            $trx_contract->report_pbj_contract_id = $contract->report_pbj_contract_id;
            $trx_contract->sp3_id = $contract->sp3_id;
            if ($request->hasFile('file_performance')) {
                $file = $request->file('file_performance');
                $extension = $file->getClientOriginalExtension();
                $new_name = 'file-jaminan-contract' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $file->move(public_path('file/contract'), $new_name);
                $trx_contract->file_performance_contract = $new_name;
            }
            $trx_contract->tanggal_submit = $request["tanggal_submit_performance"];
            $trx_contract->created_by = Auth::user()->id;
            $trx_contract->save();
            if ($trx_contract) {
                $contract->contract_status = 'PROSES_VJP';
            }
        } else if ($request["status"] == 'PROSES_VJP') {
            $trx_contract = new \App\Models\TrxVerifikasiContract();
            $trx_contract->report_pbj_contract_id = $contract->report_pbj_contract_id;
            $trx_contract->sp3_id = $contract->sp3_id;
            if ($request->hasFile('file_verifikasi')) {
                $file = $request->file('file_verifikasi');
                $extension = $file->getClientOriginalExtension();
                $new_name = 'file-verifikasi-contract' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $file->move(public_path('file/contract'), $new_name);
                $trx_contract->file_verifikasi_contract = $new_name;
            }
            $trx_contract->tanggal_submit = $request["tanggal_submit_verifikasi"];
            $trx_contract->created_by = Auth::user()->id;
            $trx_contract->save();
            if ($trx_contract) {
                $contract->contract_status = 'PROSES_VJP';
            }
            $contract->contract_status = 'PROSES_RDC';
        } else if ($request["status"] == 'PROSES_RDC') {
            $trx_contract = new \App\Models\TrxReviewContract();
            $trx_contract->report_pbj_contract_id = $contract->report_pbj_contract_id;
            $trx_contract->sp3_id = $contract->sp3_id;
            if ($request->hasFile('file_review')) {
                $file = $request->file('file_review');
                $extension = $file->getClientOriginalExtension();
                $new_name = 'file-review-contract' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $file->move(public_path('file/contract'), $new_name);
                $trx_contract->file_review_contract = $new_name;
            }
            $trx_contract->tanggal_submit = $request["tanggal_submit_verifikasi"];
            $trx_contract->created_by = Auth::user()->id;
            $trx_contract->save();
            if ($trx_contract) {
                $contract->contract_status = 'PROSES_VAC';
            }
        }else if ($request["status"] == 'PROSES_VAC') {
            $trx_contract = new \App\Models\TrxVendorContract();
            $trx_contract->report_pbj_contract_id = $contract->report_pbj_contract_id;
            $trx_contract->sp3_id = $contract->sp3_id;
            if ($request->hasFile('file_vendor')) {
                $file = $request->file('file_vendor');
                $extension = $file->getClientOriginalExtension();
                $new_name = 'file-vendor-contract' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $file->move(public_path('file/contract'), $new_name);
                $trx_contract->file_vendor_contract = $new_name;
            }
            $trx_contract->tanggal_submit = $request["tanggal_submit_vendor"];
            $trx_contract->created_by = Auth::user()->id;
            $trx_contract->save();
            if ($trx_contract) {
                $contract->contract_status = 'PROSES_KAC';
            }
        }else if ($request["status"] == 'PROSES_KAC') {
            $trx_contract = new \App\Models\TrxKciContract();
            $trx_contract->report_pbj_contract_id = $contract->report_pbj_contract_id;
            $trx_contract->sp3_id = $contract->sp3_id;
            if ($request->hasFile('file_kci')) {
                $file = $request->file('file_kci');
                $extension = $file->getClientOriginalExtension();
                $new_name = 'file-kci-contract' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $file->move(public_path('file/contract'), $new_name);
                $trx_contract->file_kci_contract = $new_name;
            }
            $trx_contract->tanggal_submit = $request["tanggal_submit_kci"];
            $trx_contract->created_by = Auth::user()->id;
            $trx_contract->save();
            if ($trx_contract) {
                $contract->contract_status = 'PROSES_CR';
            }
        }
        $contract->save();
        return response()->json(['status' => 200, 'proses_st' => $contract->contract_status]);
    }

    public function data(Request $request)
    {
        $data = DB::select('SELECT * FROM trx_pbj_contract_report ORDER BY report_pbj_contract_id DESC');
        return FacadesDataTables::of($data)
            ->addColumn('action', function ($row) {
                $btn = '<a href="' . route('contract.show', $row->report_pbj_contract_id) . '">
                            <button class="btn btn-sm btn-primary btn-rounded">
                                <i class="uil uil-search"></i>
                            </button>
                        </a>';
                return $btn;
            })
            ->addColumn('nilai_rkap', function ($row) {
                return number_format($row->nilai_rkap, 2);
            })
            ->addColumn('nilai_contract', function ($row) {
                return number_format($row->nilai_contract, 2);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
