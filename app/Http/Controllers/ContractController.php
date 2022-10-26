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
        // $data["arr"] = DB::select('SELECT * FROM trx_pbj_contract_report WHERE report_pbj_contract_id=' . $id . '');
        $data["arr"] = DB::select('select ts.*, kkn.harga_negosiasi,
        mt.keterangan as contract_status from trx_sp3 ts
        inner join trx_klasifikasi_konfirmasi_negosiasi kkn 
        on ts.sp3_id = kkn.sp3_id 
        inner join trx_penetapan_pemenang pp 
        on pp.vendor_code = kkn.vendor_code
        inner join auth.mapping_type mt 
        on mt.mapping_desc = ts.proses_st
        where kkn.harga_negosiasi is not null AND ts.sp3_id=' . $id . '');
        $data["data"] = $data["arr"][0];
        // dd($data["data"]);
        $data["trx_draft"] = \App\Models\TrxDraftContract::where('sp3_id', $id)->get();
        $data["trx_jaminan"] = \App\Models\TrxJaminanContract::where('sp3_id', $id)->get();
        $data["trx_verifikasi"] = \App\Models\TrxVerifikasiContract::where('sp3_id', $id)->get();
        $data["trx_review"] = \App\Models\TrxReviewContract::where('sp3_id', $id)->get();
        $data["trx_vendor"] = \App\Models\TrxVendorContract::where('sp3_id', $id)->get();
        $data["trx_approval"] = \App\Models\TrxApprovalLogistik::where('sp3_id', $id)->get();
        $data["trx_approval_user"] = \App\Models\TrxApprovalUser::where('sp3_id', $id)->get();
        $data["trx_approval_legal"] = \App\Models\TrxApprovalLegal::where('sp3_id', $id)->get();
        $data["trx_kci"] = \App\Models\TrxKciContract::where('sp3_id', $id)->get();
        $data["trx_mppl"] = \App\Models\TrxMppl::where('sp3_id', $id)->get();
        $data["pemenang"] = \App\Models\TrxPenetapanPemenang::where('sp3_id', $id)->first();
        $data["summary"] = \App\Models\TrxSummaryContract::where('sp3_id', $id)->first();
        $data["bank"] = DB::select('SELECT * FROM bank_master');
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
        $sp3_id = $request["sp3_id"] != '' || $request["sp3_id"] != null ? $request["sp3_id"] : $request["id"];
        $contract = \App\Models\SP3::find($sp3_id);
        if ($request["status"] == 'PROSES_DC') {
            $trx_contract = new \App\Models\TrxDraftContract();
            // $trx_contract->report_pbj_contract_id = $contract->report_pbj_contract_id;
            $trx_contract->sp3_id = $contract->sp3_id;
            if ($request->hasFile('file_draft')) {
                $file = $request->file('file_draft');
                $extension = $file->getClientOriginalExtension();
                $new_name = 'file-draft-contract' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $file->move(public_path('file/contract'), $new_name);
                $trx_contract->file_draft_contract = $new_name;
            }
            $trx_contract->tanggal_submit = $request["tanggal_submit_draft"];
            $trx_contract->tanggal_end_submit = $request["tanggal_end_submit"];
            $trx_contract->notes = $request["catatan_draft"];
            $trx_contract->created_by = Auth::user()->id;
            $trx_contract->save();
            if ($trx_contract) {
                $trx_status = \App\Models\SP3::find($sp3_id);
                $trx_status->proses_st = 'PROSES_DC';
                $trx_status->save();
            }
            return redirect(route('contract.show', $sp3_id));
        } else if ($request["status"] == 'PROSES_UJP') {
            // dd($request->all());
            $trx_contract = new \App\Models\TrxJaminanContract();
            // $trx_contract->report_pbj_contract_id = $contract->report_pbj_contract_id;
            $trx_contract->sp3_id = $contract->sp3_id;
            if ($request->hasFile('file_performance')) {
                $file = $request->file('file_performance');
                $extension = $file->getClientOriginalExtension();
                $new_name = 'file-jaminan-contract' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $file->move(public_path('file/contract'), $new_name);
                $trx_contract->file_performance_contract = $new_name;
            }
            $trx_contract->tanggal_submit = $request["tanggal_submit_performace"];
            $trx_contract->bank_name = $request["bank"];
            $trx_contract->bank_cab = $request["cabang"];
            $trx_contract->no_bank_garansi = $request["bank_garansi"];
            $trx_contract->minimum_jaminan = str_replace('.', '', $request["minimum_jaminan"]);
            $trx_contract->start_berlaku = $request["start_berlaku"];
            $trx_contract->end_berlaku = $request["end_berlaku"];
            $trx_contract->nilai_jaminan = str_replace('.', '', $request["nilai_jaminan"]);
            $trx_contract->tanggal_terbit_jamlak = $request["tanggal_jamlak"];
            $trx_contract->catatan_performance = $request["catatan_performance"];
            $trx_contract->jumlah_hari_kalender = $request["jumlah_hari_kalender"];
            $trx_contract->created_by = Auth::user()->id;
            $trx_contract->save();
            if ($trx_contract) {
                $trx_status = \App\Models\SP3::find($sp3_id);
                $trx_status->proses_st = $request["status"];
                $trx_status->save();
            }
            return redirect(route('contract.show', $sp3_id));
        } else if ($request["status"] == 'PROSES_VJP') {
            $trx_contract = new \App\Models\TrxVerifikasiContract();
            // $trx_contract->report_pbj_contract_id = $contract->report_pbj_contract_id;
            $trx_contract->sp3_id = $contract->sp3_id;
            if ($request->hasFile('file_verifikasi')) {
                $file = $request->file('file_verifikasi');
                $extension = $file->getClientOriginalExtension();
                $new_name = 'file-verifikasi-contract' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $file->move(public_path('file/contract'), $new_name);
                $trx_contract->file_verifikasi_contract = $new_name;
            }
            $trx_contract->tanggal_submit = $request["tanggal_submit_verifikasi"];
            $trx_contract->tanggal_end_submit = $request["tanggal_end_verifikasi"];
            $trx_contract->notes = $request["catatan_verifikasi"];
            $trx_contract->created_by = Auth::user()->id;
            $trx_contract->save();
            if ($trx_contract) {
                $trx_status = \App\Models\SP3::find($sp3_id);
                $trx_status->proses_st = $request["status"];
                $trx_status->save();
            }
            return redirect(route('contract.show', $sp3_id));
        } else if ($request["status"] == 'PROSES_RDC') {
            $arr = $request["tanggal_submit_review"];
            foreach ($arr as $key => $val) {
                $trx_contract = new \App\Models\TrxReviewContract();
                $trx_contract->sp3_id = $contract->sp3_id;
                if ($request->hasFile('file_review')) {
                    $file = $request->file('file_review')[$key];
                    $extension = $file->getClientOriginalExtension();
                    $new_name = 'file-review-contract' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                    $file->move(public_path('file/contract'), $new_name);
                    $trx_contract->file_review_contract = $new_name;
                }
                $trx_contract->tanggal_submit = $val;
                $trx_contract->tanggal_end_submit = $request["tanggal_end_review"][$key];
                $trx_contract->notes = $request["catatan_review"][$key];
                $trx_contract->created_by = Auth::user()->id;
                $trx_contract->save();
                if ($trx_contract) {
                    $trx_status = \App\Models\SP3::find($sp3_id);
                    $trx_status->proses_st = 'PROSES_RDC';
                    $trx_status->save();
                }
            }
            return redirect(route('contract.show', $sp3_id));
        } else if ($request["status"] == 'PROSES_ALG') {
            $arr = $request["tanggal_submit_logistik"];
            foreach ($arr as $key => $val) {
                $trx_contract = new \App\Models\TrxApprovalLogistik();
                $trx_contract->sp3_id = $contract->sp3_id;
                if ($request->hasFile('file_approval_logistik')) {
                    $file = $request->file('file_approval_logistik')[$key];
                    $extension = $file->getClientOriginalExtension();
                    $new_name = 'file-approval-logistik-contract' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                    $file->move(public_path('file/contract'), $new_name);
                    $trx_contract->file_approval_logistik = $new_name;
                }
                $trx_contract->tanggal_submit = $val;
                $trx_contract->tanggal_end_submit = $request["tanggal_end_logistik"][$key];
                $trx_contract->catatan_logistik = $request["catatan_logistik"][$key];
                $trx_contract->created_by = Auth::user()->id;
                $trx_contract->save();
                if ($trx_contract) {
                    $trx_status = \App\Models\SP3::find($sp3_id);
                    $trx_status->proses_st = 'PROSES_ALG';
                    $trx_status->save();
                }
            }
            return redirect(route('contract.show', $sp3_id));
        } else if ($request["status"] == 'PROSES_APU') {
            $arr = $request["tanggal_submit_user"];
            foreach ($arr as $key => $val) {
                $trx_contract = new \App\Models\TrxApprovalUser();
                $trx_contract->sp3_id = $contract->sp3_id;
                if ($request->hasFile('file_approval_user')) {
                    $file = $request->file('file_approval_user')[$key];
                    $extension = $file->getClientOriginalExtension();
                    $new_name = 'file-approval-user-contract' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                    $file->move(public_path('file/contract'), $new_name);
                    $trx_contract->file_approval_user = $new_name;
                }
                $trx_contract->tanggal_submit = $val;
                $trx_contract->tanggal_end_submit = $request["tanggal_end_user"][$key];
                $trx_contract->catatan_user_contract = $request["catatan_user"][$key];
                $trx_contract->created_by = Auth::user()->id;
                $trx_contract->save();
                if ($trx_contract) {
                    $trx_status = \App\Models\SP3::find($sp3_id);
                    $trx_status->proses_st = 'PROSES_APU';
                    $trx_status->save();
                }
            }
            return redirect(route('contract.show', $sp3_id));
        } else if ($request["status"] == 'PROSES_APL') {
            $arr = $request["tanggal_submit_user"];
            foreach ($arr as $key => $val) {
                $trx_contract = new \App\Models\TrxApprovalLegal();
                $trx_contract->sp3_id = $contract->sp3_id;
                if ($request->hasFile('file_approval_user')) {
                    $file = $request->file('file_approval_user')[$key];
                    $extension = $file->getClientOriginalExtension();
                    $new_name = 'file-approval-legal' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                    $file->move(public_path('file/contract'), $new_name);
                    $trx_contract->file_approval_legal = $new_name;
                }
                $trx_contract->tanggal_submit = $val;
                $trx_contract->tanggal_end_submit = $request["tanggal_end_user"][$key];
                $trx_contract->notes = $request["catatan_user"][$key];
                $trx_contract->created_by = Auth::user()->id;
                $trx_contract->save();
                if ($trx_contract) {
                    $trx_status = \App\Models\SP3::find($sp3_id);
                    $trx_status->proses_st = 'PROSES_APL';
                    $trx_status->save();
                }
            }
            return redirect(route('contract.show', $sp3_id));
        } else if ($request["status"] == 'PROSES_VAC') {
            $arr = $request["tanggal_submit_vendor"];
            foreach ($arr as $key => $val) {
                $trx_contract = new \App\Models\TrxVendorContract();
                $trx_contract->sp3_id = $contract->sp3_id;
                if ($request->hasFile('file_vendor')) {
                    $file = $request->file('file_vendor')[$key];
                    $extension = $file->getClientOriginalExtension();
                    $new_name = 'file-vendor-contract' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                    $file->move(public_path('file/contract'), $new_name);
                    $trx_contract->file_vendor_contract = $new_name;
                }
                $trx_contract->tanggal_submit = $val;
                $trx_contract->tanggal_end_submit = $request["tanggal_end_vendor"][$key];
                $trx_contract->notes = $request["catatan_vendor"][$key];
                $trx_contract->created_by = Auth::user()->id;
                $trx_contract->save();
                if ($trx_contract) {
                    $trx_status = \App\Models\SP3::find($sp3_id);
                    $trx_status->proses_st = 'PROSES_VAC';
                    $trx_status->save();
                }
            }
            return redirect(route('contract.show', $sp3_id));
        } else if ($request["status"] == 'PROSES_KAC') {
            $trx_contract = new \App\Models\TrxKciContract();
            // $trx_contract->report_pbj_contract_id = $contract->report_pbj_contract_id;
            $trx_contract->sp3_id = $contract->sp3_id;
            if ($request->hasFile('file_kci')) {
                $file = $request->file('file_kci');
                $extension = $file->getClientOriginalExtension();
                $new_name = 'file-kci-contract' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $file->move(public_path('file/contract'), $new_name);
                $trx_contract->file_kci_contract = $new_name;
            }
            $trx_contract->tanggal_submit = $request["tanggal_submit_kci"];
            $trx_contract->tanggal_end_submit = $request["tanggal_end_kci"];
            $trx_contract->notes = $request["catatan_ttd_kci"];
            $trx_contract->created_by = Auth::user()->id;
            $trx_contract->save();
            if ($trx_contract) {
                $trx_status = \App\Models\SP3::find($sp3_id);
                $trx_status->proses_st = 'PROSES_KAC';
                $trx_status->save();
            }
            return redirect(route('contract.show', $sp3_id));
        } else if ($request["status"] == 'PROSES_CR') {
            // dd($request->all());
            $trx_contract = new \App\Models\TrxMppl();
            // $trx_contract->report_pbj_contract_id = $contract->report_pbj_contract_id;
            $trx_contract->sp3_id = $request["sp3_id"];
            $trx_contract->start_date_mppl = $request["start_date_mppl"];
            $trx_contract->end_date_mppl = $request["end_date_mppl"];
            $trx_contract->off_days = $request["off_days"];
            $trx_contract->uncontroll_days = $request["uncontroll_days"];
            $trx_contract->pengawas_pekerjaan = $request["catatan_penanggung_jawab"];
            $trx_contract->termin = $request["termin"];
            $trx_contract->save();
            if ($trx_contract) {
                $trx_status = \App\Models\SP3::find($sp3_id);
                $trx_status->proses_st = 'PROSES_CR';
                $trx_status->save();
            }
            return redirect(route('contract.show', $sp3_id));
        } else if ($request["status"] == 'summary_contract') {
            $trx_contract = new \App\Models\TrxSummaryContract();
            // $trx_contract->report_pbj_contract_id = $contract->report_pbj_contract_id;
            $trx_contract->sp3_id = $contract->sp3_id;
            $trx_contract->nomor_contract = $request["nomor_kontrak"];
            $trx_contract->tgl_contract = $request["tanggal_kontrak"];
            $trx_contract->total_day_work = $request["off_days"];
            $trx_contract->uncontroll_days = $request["uncontroll_days"];
            $trx_contract->hari_libur = $request["hari_libur"];
            $trx_contract->notes = $request["catatan_summary_contract"];
            $trx_contract->created_by = Auth::user()->id;
            if ($request->hasFile('file_perjanjian')) {
                $file = $request->file('file_perjanjian');
                $extension = $file->getClientOriginalExtension();
                $new_name = 'file-perjanjian' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $file->move(public_path('file/contract'), $new_name);
                $trx_contract->file_perjanjian = $new_name;
            }
            $trx_contract->created_by = Auth::user()->id;
            $trx_contract->save();
            return redirect(route('contract.show', $sp3_id));
        }
        $contract->save();
        return response()->json(['status' => 200, 'proses_st' => $contract->proses_st]);
    }

    public function data(Request $request)
    {
        $data = DB::select('select ts.sp3_id, ts.timeline_id, ts.judul_pengadaan, ts.no_sp3,
        ts.department_cd, ts.created_at, kkn.harga_negosiasi, mt.keterangan as contract_status 
        from public.trx_sp3 ts
        inner join public.trx_klasifikasi_konfirmasi_negosiasi kkn 
        on ts.sp3_id = kkn.sp3_id 
        inner join public.trx_penetapan_pemenang pp 
        on pp.vendor_code = kkn.vendor_code
        inner join auth.mapping_type mt
        on mt.mapping_desc = ts.proses_st
        where kkn.harga_negosiasi is not null GROUP BY ts.sp3_id, ts.timeline_id,
        ts.judul_pengadaan, ts.no_sp3, ts.department_cd, ts.created_at, 
        kkn.harga_negosiasi, mt.keterangan');
        return FacadesDataTables::of($data)
            ->addColumn('sp3_no', function ($row) {
                return '<a href="' . route('contract.show', $row->sp3_id) . '">' . $row->no_sp3 . '</a>';
            })
            ->addColumn('action', function ($row) {
                $btn = '<a href="' . route('contract.show', $row->sp3_id) . '">
                            <button class="btn btn-sm btn-primary btn-rounded">
                                <i class="uil uil-search"></i>
                            </button>
                        </a>';
                return $btn;
            })
            ->addColumn('harga_negosiasi', function ($row) {
		if($row->harga_negosiasi != ''){
                   return number_format($row->harga_negosiasi,2,",",".");
		}else{
                   return '-';
		}

            })
            ->addColumn('proses_st', function ($row) {
                return '<badges class="badge badge-danger">' . $row->contract_status . '</badges>';
            })
            ->rawColumns(['action', 'sp3_no', 'proses_st'])
            ->make(true);
    }
}
