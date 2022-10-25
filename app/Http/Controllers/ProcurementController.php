<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Svg\Tag\Rect;

class ProcurementController extends Controller
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
        if ($request["undangan"]) {
            $undangan = new \App\Models\TrxUndangan();
            $undangan->sp3_id = $request["sp3_id"];
            $undangan->catatan = $request["catatan_rks"];
            $undangan->nomor_pengumuman = $request["nomor_pengumuman"];
            $undangan->tanggal_rks = date('Y-m-d');
            if ($request->hasFile('file_penawaran')) {
                $file_penawaran = $request->file('file_penawaran');
                $extension = $file_penawaran->getClientOriginalExtension();
                $new_name = 'SP3-undangan' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $file_penawaran->move(public_path('file/rks'), $new_name);
                $undangan->file_penawaran = $new_name;
            }
            if ($request->hasFile('file_dokumen')) {
                $file_dokumen = $request->file('file_dokumen');
                $extension_draft = $file_dokumen->getClientOriginalExtension();
                $new_name_draft = 'SP3-undangan' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension_draft;
                $file_dokumen->move(public_path('file/rks'), $new_name_draft);
                $undangan->file_dokumen = $new_name_draft;
            }
            if ($undangan->save()) {
                $sp3 = \App\Models\SP3::findOrFail($request["sp3_id"]);
                $sp3->proses_st = 'PROSES_PP';
                $sp3->save();
                return redirect(route('procurement.show', $request["sp3_id"]));
            }
        } else {
            $files = new \App\Models\DraftRks();
            $files->sp3_id = $request["sp3_id"];
            $files->nomor_rks = $request["nomor_rks"];
            if ($request->hasFile('file_penawaran')) {
                // PROPOSAL/TEMPLATE FILE
                $file_penawaran = $request->file('file_penawaran');
                $extension = $file_penawaran->getClientOriginalExtension();
                $new_name = 'SP3' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $file_penawaran->move(public_path('file/rks'), $new_name);
                $files->file_penawaran = $new_name;
            }
            if ($request->hasFile('file_dokumen')) {
                $file_dokumen = $request->file('file_dokumen');
                $extension_draft = $file_dokumen->getClientOriginalExtension();
                $new_name_draft = 'SP3' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension_draft;
                $file_dokumen->move(public_path('file/rks'), $new_name_draft);
                $files->file_dokumen = $new_name_draft;
            }
            $files->metode = $request["metode_dokumen"];
            $files->catatan = $request["catatan_rks"];
            $files->created_by = Auth::user()->id;
            $files->save();
            if ($files) {
                $sp3 = \App\Models\SP3::findOrFail($request["sp3_id"]);
                $sp3->proses_st = 'PROSES_RRKS';
                $sp3->save();
                return redirect(route('procurement.show', $request["sp3_id"]));
            }
            if ($request["penjadwalan"]) {
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
        $data["spr"] = \App\Models\TrxSpr::where('sp3_id', $id)->get();
        $data["trx_npp"] = \App\Models\TrxNpp::where('sp3_id', $id)->get();
        $data["tender_list"] = DB::table('public.trx_peserta_tender as a')
            ->select(
                'a.peserta_tender_id',
                'a.sp3_id',
                'a.vendor_code',
                'a.phone_number',
                'a.pic_name',
                'a.email_corporate',
                'a.address',
                'b.vendor_code',
                'b.vendor_name'
            )
            ->where('sp3_id', $id)
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->get();
        $data["tender_aanwidjzing"] = DB::table('public.trx_aanwidjzing as a')
            ->select(
                'a.aanwidjzing_id',
                'a.sp3_id',
                'a.vendor_code',
                'a.verif_value',
                'b.vendor_code',
                'b.vendor_name'
            )
            ->where('a.sp3_id', $id)
            ->where('a.verif_value', '=', '1')
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->get();
        $data["rks"] = \App\Models\DraftRks::where('sp3_id', $id)->first();
        $data["undangan"] = \App\Models\TrxUndangan::where('sp3_id', $id)->first();
        $data["aandwidjzing"] = DB::table('trx_aanwidjzing as a')->where('sp3_id', $id)
            ->select(
                DB::raw('a.*'),
                'b.vendor_code',
                'b.vendor_name'
            )
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->get();
        $data["evaluasi_1_sampul"] = DB::table('trx_evaluasi_dokumen_penawaran as a')
            ->select(
                DB::raw('a.*'),
                'b.vendor_code',
                'b.vendor_name'
            )
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->where('a.sp3_id', $id)
            ->where('a.metode', '1_sampul')
            ->get();
        $data["evaluasi_2_sampul"] = DB::table('trx_evaluasi_dokumen_penawaran as a')
            ->select(
                DB::raw('a.*'),
                'b.vendor_code',
                'b.vendor_name'
            )
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->where('a.sp3_id', $id)
            ->where('a.metode', '2_sampul')
            ->get();
        $data["tender_lolos_evaluasi"] = DB::table('trx_evaluasi_dokumen_penawaran as a')
            ->select(
                DB::raw('a.*'),
                'b.vendor_code',
                'b.vendor_name'
            )
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->where('a.sp3_id', $id)
            ->where('penilaian_dokumen', '1')
            ->get();
        $data["dokumen_penawaran"] = DB::table('trx_document_penawaran as a')
            ->select(
                DB::raw('a.*'),
                'b.vendor_code',
                'b.vendor_name'
            )
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->where('a.sp3_id', $id)
            ->where('a.metode', '2_sampul')
            ->get();
        $data["bahp"] = DB::table('trx_berita_acara_hasil_pelelangan as a')
            ->select(
                DB::raw('a.*'),
                'b.vendor_code',
                'b.vendor_name'
            )
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->where('sp3_id', $id)
            ->get();
        $data["klarifikasi"] = DB::table('trx_klasifikasi_konfirmasi_negosiasi as a')
            ->select(
                DB::raw('a.*'),
                'b.vendor_code',
                'b.vendor_name'
            )
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->where('sp3_id', $id)
            ->get();
        $data["pemenang"] = \App\Models\TrxPenetapanPemenang::where('sp3_id', $id)->first();
        $data["negosiasi"] = DB::table('trx_klasifikasi_konfirmasi_negosiasi as a')
            ->select('a.*', 'b.vendor_name', 'b.vendor_code')
            ->leftJoin('vendor as b', 'a.vendor_code', 'b.vendor_code', 'b.street', 'b.city', 'b.postal_code')
            ->where('a.sp3_id', $id)
            ->first();
        $data["undangan_kkn"] = DB::table('trx_undangan_kkn as a')
            ->select('a.*', 'b.vendor_name', 'b.vendor_code')
            ->leftJoin('vendor as b', 'a.vendor_code', 'b.vendor_code', 'b.street', 'b.city', 'b.postal_code')
            ->where('a.sp3_id', $id)
            ->get();
        $data["dokumen"] = DB::table('public.trx_document_penawaran as a')
            ->select(
                'a.document_penawaran_id',
                'a.sp3_id',
                'a.vendor_code',
                'a.tanggal_submit_dokumen',
                'a.file_dokumen',
                'a.tanggal_submit_dokumen',
                'b.vendor_code',
                'b.vendor_name'
            )
            ->where('a.sp3_id', $id)
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->get();
        $data["vendor"] = DB::table('vendor')
            ->select('vendor_name', 'vendor_code', 'street')
            ->whereIn('vendor_code', json_decode($data["data"]["nama_vendor"]))
            ->get();
        $data["berita_acara"] = \App\Models\TrxBeritaAcara::where('sp3_id', $id)->get();
        $data["pemenangfinal"] = false;
        return view('procurement.show-new', $data);
    }

    public function summary($id)
    {
        $data["data"] = \App\Models\SP3::find($id);
        $data["trx_npp"] = \App\Models\TrxNpp::where('sp3_id', $id)->get();
        $data["tender_list"] = DB::table('public.trx_peserta_tender as a')
            ->select(
                'a.peserta_tender_id',
                'a.sp3_id',
                'a.vendor_code',
                'a.phone_number',
                'a.pic_name',
                'a.email_corporate',
                'a.address',
                'b.vendor_code',
                'b.vendor_name'
            )
            ->where('sp3_id', $id)
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->get();
        $data["tender_aanwidjzing"] = DB::table('public.trx_aanwidjzing as a')
            ->select(
                'a.aanwidjzing_id',
                'a.sp3_id',
                'a.vendor_code',
                'a.verif_value',
                'b.vendor_code',
                'b.vendor_name'
            )
            ->where('a.sp3_id', $id)
            ->where('a.verif_value', '=', '1')
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->get();
        $data["rks"] = \App\Models\DraftRks::where('sp3_id', $id)->first();
        $data["aandwidjzing"] = DB::table('trx_aanwidjzing as a')->where('sp3_id', $id)
            ->select(
                DB::raw('a.*'),
                'b.vendor_code',
                'b.vendor_name'
            )
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->get();
        $data["evaluasi_1_sampul"] = DB::table('trx_evaluasi_dokumen_penawaran as a')
            ->select(
                DB::raw('a.*'),
                'b.vendor_code',
                'b.vendor_name'
            )
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->where('a.sp3_id', $id)
            ->where('a.metode', '1_sampul')
            ->get();
        $data["evaluasi_2_sampul"] = DB::table('trx_evaluasi_dokumen_penawaran as a')
            ->select(
                DB::raw('a.*'),
                'b.vendor_code',
                'b.vendor_name'
            )
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->where('a.sp3_id', $id)
            ->where('a.metode', '2_sampul')
            ->get();
        $data["bahp"] = DB::table('trx_berita_acara_hasil_pelelangan as a')
            ->select(
                DB::raw('a.*'),
                'b.vendor_code',
                'b.vendor_name'
            )
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->where('sp3_id', $id)
            ->get();
        $data["klarifikasi"] = DB::table('trx_klasifikasi_konfirmasi_negosiasi as a')
            ->select(
                DB::raw('a.*'),
                'b.vendor_code',
                'b.vendor_name'
            )
            ->join('public.vendor as b', 'a.vendor_code', 'b.vendor_code')
            ->where('sp3_id', $id)
            ->get();
        $data["pemenang"] = \App\Models\TrxPenetapanPemenang::where('sp3_id', $id)->first();
        $data["pemenangfinal"] = false;
        return view('procurement.summary', $data);
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

    public function reviewing(Request $request)
    {
        $status = \App\Models\SP3::find($request["sp3_id"]);
        $status->proses_st = 'PROSES_RRKS';
        $status->save();
    }

    public function approve(Request $request)
    {
        $status = \App\Models\SP3::find($request["sp3_id"]);
        if ($request["type"] == 'approve') {
            if ($request["proses_st"] == 'PROSES_RRKS') {
                // $status->proses_st = 'PROSES_PP';
                $status->proses_st = 'PROSES_URKS';
            } elseif ($request["proses_st"] == 'PROSES_PDP') {
                $status->proses_st = 'PROSES_EP';
            }
            // elseif ($request["proses_st"] == 'PROSES_DH') {
            //     $status->proses_st = 'PROSES_EP';
            // } 
            elseif ($request["proses_st"] == 'PROSES_EP' || $request["proses_st"] == 'PROSES_EDH' || $request["proses_st"] == 'PROSES_PAT') {
                $status->proses_st = 'PROSES_KKN';
            }
            $status->save();
            if ($status) {
                return response()->json(['status' => 200]);
            }
        }
    }

    public function reject_penawaran(Request $request)
    {
        $status = \App\Models\SP3::find($request["sp3_id"]);
        if ($request["status"] == 'gagal_lelang') {
            $status->proses_st = 'PROSES_PGL';
        } else {
            $status->proses_st = 'PROSES_PP';
        }
        $status->save();
        if ($status) {
            return response()->json(['status' => 200]);
        }
    }

    public function save_tender(Request $request)
    {
        // dd($request->all());
        foreach ($request["vendor_code"] as $key => $val) {
            $tender = new \App\Models\TrxPesertaTender();
            $tender->sp3_id = $request["sp3_id"];
            $tender->vendor_code = $val;
            // $tender->peserta_tender = $val;
            $tender->phone_number = $request["phone_number"][$key];
            $tender->pic_name = $request["pic_name"][$key];
            $tender->email_corporate = $request["email"][$key];
            $tender->address = $request["vendor_address"][$key];
            $tender->created_by = Auth::user()->id;
            $tender->save();
        }
        $status = \App\Models\SP3::find($request["sp3_id"]);
        if ($status->proses_st == 'PROSES_PP') {
            $status->proses_st = 'PROSES_AL';
        }
        $status->save();
        // return response()->json(['status' => 200]);
        return redirect(route('procurement.show', $request["sp3_id"]));
    }

    public function save_aanwidjzing(Request $request)
    {
        // dd($request->all());
        foreach ($request["vendor_code"] as $key => $val) {
            $aanwidjzing = new \App\Models\TrxAanwidjzing();
            $aanwidjzing->sp3_id = $request["sp3_id"];
            $aanwidjzing->vendor_code = $val;
            $aanwidjzing->verif_value = $request["verif_value"][$key];
            $aanwidjzing->verif_note = $request["verif_note"][$key];
            $aanwidjzing->created_by = Auth::user()->id;
            $aanwidjzing->save();
        }

        $berita_acara = new \App\Models\TrxBeritaAcara();
        if ($request->hasFile('file_berita_acara')) {
            $file = $request->file('file_berita_acara');
            $extension = $file->getClientOriginalExtension();
            $new_name = 'berita-acara-aanwidjzing' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
            $file->move(public_path('file/sp3'), $new_name);
            $berita_acara->file_berita_acara = $new_name;
        }
        $berita_acara->sp3_id = $request["sp3_id"];
        $berita_acara->created_at = Auth::user()->id;
        $berita_acara->step_process = 'aanwidjzing';
        $berita_acara->nomor_spr = $request["nomor_aanwidjzing"];
        $berita_acara->save();

        // UPDATE STATUS AFTER Aanwidjzing
        $status = \App\Models\SP3::find($request["sp3_id"]);
        $status->proses_st = 'PROSES_PDP';
        $status->save();
        return redirect(route('procurement.show', $request["sp3_id"]));
    }

    public function save_dokumen_penawaran(Request $request)
    {
        // dd($request->all());
        foreach ($request["vendor_code"] as $key => $val) {
            $dokumen = new \App\Models\TrxDocumentPenawaran();
            $dokumen->sp3_id = $request["sp3_id"];
            $dokumen->metode = $request["metode"];
            $dokumen->vendor_code = $val;
            if ($request["metode"] == '1_sampul') {
                // dd($request->all());
                $dokumen->tanggal_submit_dokumen = $request["dok_admin_date"][$key];
                $dokumen->created_by = Auth::user()->id;
                $file = $request->file('file_dokumen')[$key];
                $extension = $file->getClientOriginalExtension();
                $new_name = 'dokumen-penawaran' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $file->move(public_path('file/sp3'), $new_name);

                $dokumen->file_dokumen = $new_name;
                $dokumen->created_by = Auth::user()->id;
            } else if ($request["metode"] == '2_sampul') {
                // dd($request->all());
                if ($request["type"] == 'undangan_pembukaan_dokumen') {
                    $dokumen->tanggal_undangan_pembukaan = $request["tanggal_undangan_pembukaan"][$key];
                    $dokumen->created_by = Auth::user()->id;
                    if ($request->hasFile('surat_undangan_pembukaan')) {
                        $file = $request->file('surat_undangan_pembukaan')[$key];
                        $extension = $file->getClientOriginalExtension();
                        $new_name = 'dokumen-udangan-pembukaan' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                        $file->move(public_path('file/sp3'), $new_name);
                        $dokumen->surat_undangan_pembukaan = $new_name;
                    }

                    // update step process dokumen penawaran
                    $dokumen->created_by = Auth::user()->id;
                    $status = \App\Models\SP3::find($request["sp3_id"]);
                    $status->step_process = 1;
                    $status->save();
                } else if ($request["type"] == 'pembukaan_dokumen') {
                    $dokumen->tanggal_pembukaan_doc = $request["tanggal_pembukaan_doc"][$key];
                    $dokumen->created_by = Auth::user()->id;
                    if ($request->hasFile('doc_pembukaan')) {
                        $file = $request->file('doc_pembukaan')[$key];
                        $extension = $file->getClientOriginalExtension();
                        $new_name = 'dokumen-pembukaan' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                        $file->move(public_path('file/sp3'), $new_name);
                        $dokumen->doc_pembukaan = $new_name;
                    }
                    $dokumen->created_by = Auth::user()->id;
                    $status = \App\Models\SP3::find($request["sp3_id"]);
                    $status->step_process = 2;
                    $status->save();
                } else if ($request["type"] == 'undangan_pembukaan_harga') {
                    $dokumen->tgl_pemb_doc_harga = $request["tgl_pemb_doc_harga"][$key];
                    $dokumen->created_by = Auth::user()->id;
                    if ($request->hasFile('surat_undangan_doc_harga')) {
                        $file = $request->file('surat_undangan_doc_harga')[$key];
                        $extension = $file->getClientOriginalExtension();
                        $new_name = 'dokumen-undangan-doc-harga' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                        $file->move(public_path('file/sp3'), $new_name);
                        $dokumen->surat_undangan_doc_harga = $new_name;
                    }
                    $dokumen->created_by = Auth::user()->id;
                    $status = \App\Models\SP3::find($request["sp3_id"]);
                    $status->step_process = 3;
                    $status->save();
                } else if ($request["type"] == 'pembukaan_dokumen_harga') {
                    $dokumen->tgl_doc_pemb_harga = $request["tgl_doc_pemb_harga"][$key];
                    $dokumen->created_by = Auth::user()->id;
                    if ($request->hasFile('doc_pemb_harga')) {
                        $file = $request->file('doc_pemb_harga')[$key];
                        $extension = $file->getClientOriginalExtension();
                        $new_name = 'dokumen-doc-harga' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                        $file->move(public_path('file/sp3'), $new_name);
                        $dokumen->doc_pemb_harga = $new_name;
                    }
                    $dokumen->created_by = Auth::user()->id;
                    $status = \App\Models\SP3::find($request["sp3_id"]);
                    $status->step_process = 4;
                    $status->save();
                } else {
                    $dokumen->tanggal_submit_teknis = $request["tanggal_submit_teknis"][$key];
                    $dokumen->tanggal_submit_harga = $request["tanggal_submit_harga"][$key];
                    $dokumen->created_by = Auth::user()->id;

                    $file = $request->file('file_teknis')[$key];
                    $extension = $file->getClientOriginalExtension();
                    $new_name = 'dokumen-penawaran' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                    $file->move(public_path('file/sp3'), $new_name);

                    // SAVE FILE HARGA
                    $file1 = $request->file('file_harga')[$key];
                    $extension1 = $file1->getClientOriginalExtension();
                    $new_name1 = 'dokumen-penawaran' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension1;
                    $file1->move(public_path('file/sp3'), $new_name1);

                    $dokumen->file_teknis = $new_name;
                    $dokumen->file_harga = $new_name1;
                    $dokumen->created_by = Auth::user()->id;
                }
            }
            $dokumen->save();
        }
        if ($request["metode"] == '1_sampul') {
            // insert dokumen penawaran berita acara
            $berita_acara = new \App\Models\TrxBeritaAcara();
            $berita_acara->sp3_id = $request["sp3_id"];
            $berita_acara->step_process = 'pemasukan_dokumen_penawaran';
            $berita_acara->nomor_spr = $request["nomor_pembukaan_penawaran"];
            $berita_acara->notes = $request["catatan_pembukaan_penawaran"];
            if ($request->hasFile('file_pembukaan_penawaran')) {
                $file_berita = $request->file('file_pembukaan_penawaran');
                $extensions = $file_berita->getClientOriginalExtension();
                $new_names = 'dok-pembukaan-penawaran' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extensions;
                $file_berita->move(public_path('file/sp3'), $new_names);
                $berita_acara->file_berita_acara = $new_names;
            }
            $berita_acara->save();
        } else {
            if ($request["type"] == 'undangan_pembukaan_dokumen') {
                // insert dokumen penawaran berita acara
                $berita_acara = new \App\Models\TrxBeritaAcara();
                $berita_acara->sp3_id = $request["sp3_id"];
                $berita_acara->step_process = 'undangan_pembukaan_dokumen_penawaran';
                $berita_acara->nomor_spr = $request["nomor_undangan"];
                $berita_acara->notes = $request["catatan_undangan_pembukaan"];
                if ($request->hasFile('file_undangan')) {
                    $file_berita = $request->file('file_undangan');
                    $extensions = $file_berita->getClientOriginalExtension();
                    $new_names = 'dok-undangan-penawaran-berita' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extensions;
                    $file_berita->move(public_path('file/sp3'), $new_names);
                    $berita_acara->file_berita_acara = $new_names;
                }
                $berita_acara->save();
            } else if ($request["type"] == 'pembukaan_dokumen') {
                $berita_acara = new \App\Models\TrxBeritaAcara();
                $berita_acara->sp3_id = $request["sp3_id"];
                $berita_acara->step_process = 'pembukaan_dokumen';
                $berita_acara->nomor_spr = $request["nomor_pembukaan"];
                $berita_acara->notes = $request["catatan_pembukaan"];
                if ($request->hasFile('file_pembukaan')) {
                    $file_berita = $request->file('file_pembukaan');
                    $extensions = $file_berita->getClientOriginalExtension();
                    $new_names = 'dok-pembukaan-berita' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extensions;
                    $file_berita->move(public_path('file/sp3'), $new_names);
                    $berita_acara->file_berita_acara = $new_names;
                }
                $berita_acara->save();
            } else if ($request["type"] == 'undangan_pembukaan_harga') {
                $berita_acara = new \App\Models\TrxBeritaAcara();
                $berita_acara->sp3_id = $request["sp3_id"];
                $berita_acara->step_process = 'undangan_pembukaan_harga';
                $berita_acara->nomor_spr = $request["nomor_pembukaan_harga"];
                $berita_acara->notes = $request["note_pembukaan_harga"];
                if ($request->hasFile('file_pembukaan_harga')) {
                    $file_berita = $request->file('file_pembukaan_harga');
                    $extensions = $file_berita->getClientOriginalExtension();
                    $new_names = 'dok-undangan-pembukaan-harga' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extensions;
                    $file_berita->move(public_path('file/sp3'), $new_names);
                    $berita_acara->file_berita_acara = $new_names;
                }
                $berita_acara->save();
            } else if ($request["type"] == 'pembukaan_dokumen_harga') {
                $berita_acara = new \App\Models\TrxBeritaAcara();
                $berita_acara->sp3_id = $request["sp3_id"];
                $berita_acara->step_process = 'pembukaan_harga';
                $berita_acara->nomor_spr = $request["nomor_harga"];
                $berita_acara->notes = $request["catatan_harga"];
                if ($request->hasFile('file_harga')) {
                    $file_berita = $request->file('file_harga');
                    $extensions = $file_berita->getClientOriginalExtension();
                    $new_names = 'dok-pembukaan-doc-harga' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extensions;
                    $file_berita->move(public_path('file/sp3'), $new_names);
                    $berita_acara->file_berita_acara = $new_names;
                }
                $berita_acara->save();
            }
        }
        return redirect(route('procurement.show', $request["sp3_id"]));
    }

    public function save_evaluasi_penawaran(Request $request)
    {
        foreach ($request["vendor_code"] as $key => $val) {
            $dokumen = new \App\Models\TrxEvaluasiPenawaran();
            $dokumen->sp3_id = $request["sp3_id"];
            $dokumen->metode = $request["metode"];
            $dokumen->vendor_code = $val;
            if ($request["metode"] == '1_sampul') {
                $dokumen->tanggal_evaluasi_dokumen = $request["tanggal_evaluasi_dokumen"][$key];
                $dokumen->penilaian_dokumen = $request["penilaian_dokumen"][$key];
                $dokumen->keterangan_evaluasi_dokumen = $request["catatan_evaluasi"][$key];
                $dokumen->created_by = Auth::user()->id;
                $dokumen->save();
                // UPDATE STATUS
                // $status = \App\Models\SP3::find($request["sp3_id"]);
                // $status->proses_st = 'PROSES_KKN';
                // $status->save();
            } else if ($request["metode"] == '2_sampul') {
                if ($request["type"] == 'evaluasi_dokumen_penawaran') {
                    $dokumen->tanggal_evaluasi_dokumen = $request["tgl_eval_penawaran"][$key];
                    $dokumen->penilaian_dokumen = $request["penilaian_eval_penawaran"][$key];
                    $dokumen->keterangan_evaluasi_dokumen = $request["catatan_eval_penawaran"][$key];
                    $dokumen->created_by = Auth::user()->id;
                    $dokumen->save();
                    // UPDATE STATUS
                    $status = \App\Models\SP3::find($request["sp3_id"]);
                    $status->step_process = 5;
                    $status->save();
                } else if ($request["type"] == 'pengumuman_admin_teknis') {
                    $dokumen->tanggal_evaluasi_admin = $request["tanggal_admin"][$key];
                    $dokumen->keterangan_evaluasi_admin = $request["catatan_admin"][$key];
                    $dokumen->created_by = Auth::user()->id;
                    $dokumen->save();

                    // UPDATE STATUS
                    $status = \App\Models\SP3::find($request["sp3_id"]);
                    $status->step_process = 6;
                    $status->save();
                } else if ($request["type"] == 'evaluasi_dokumen_penawaran_harga') {
                    $dokumen->tanggal_evaluasi_harga = $request["tanggal_harga"][$key];
                    $dokumen->keterangan_evaluasi_harga = $request["catatan_harga"][$key];
                    $dokumen->penilaian_harga = $request["penilaian_harga"][$key];
                    $dokumen->created_by = Auth::user()->id;
                    $dokumen->save();

                    // UPDATE STATUS
                    $status = \App\Models\SP3::find($request["sp3_id"]);
                    $status->step_process = 7;
                    $status->save();
                } else {
                    if ($request["tanggal_admin"] || $request["penilaian_admin"] || $request["catatan_admin"]) {
                        $dokumen->tanggal_evaluasi_admin = $request["tanggal_admin"][$key];
                        $dokumen->penilaian_admin = $request["penilaian_admin"][$key];
                        $dokumen->keterangan_evaluasi_admin = $request["catatan_admin"][$key];
                        $dokumen->tanggal_evaluasi_harga = $request["tanggal_harga"][$key];
                        $dokumen->penilaian_harga = $request["penilaian_harga"][$key];
                        $dokumen->keterangan_evaluasi_harga = $request["catatan_harga"][$key];
                        $dokumen->created_by = Auth::user()->id;
                        $dokumen->save();
                        // UPDATE STATUS
                        $status = \App\Models\SP3::find($request["sp3_id"]);
                        $status->proses_st = 'PROSES_EDH';
                        $status->save();
                    } else {
                        $dokumen->tanggal_evaluasi_harga = $request["tanggal_harga"][$key];
                        $dokumen->penilaian_harga = $request["penilaian_harga"][$key];
                        $dokumen->keterangan_evaluasi_harga = $request["catatan_harga"][$key];
                        $dokumen->created_by = Auth::user()->id;
                        $dokumen->save();
                        // UPDATE STATUS
                        $status = \App\Models\SP3::find($request["sp3_id"]);
                        $status->proses_st = 'PROSES_KKN';
                        $status->save();
                    }
                }
            }
        }
        if ($request["metode"] == '1_sampul') {
            $berita_acara = new \App\Models\TrxBeritaAcara();
            $berita_acara->sp3_id = $request["sp3_id"];
            $berita_acara->step_process = 'evaluasi_dokumen_penawaran';
            $berita_acara->nomor_spr = $request["nomor_evaluasi_penawaran"];
            if ($request->hasFile('file_evaluasi_penawaran')) {
                $file_berita = $request->file('file_evaluasi_penawaran');
                $extensions = $file_berita->getClientOriginalExtension();
                $new_names = 'evaluasi-penawaran' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extensions;
                $file_berita->move(public_path('file/sp3'), $new_names);
                $berita_acara->file_berita_acara = $new_names;
            }
            $berita_acara->save();
        } else {
            if ($request["type"] == 'evaluasi_dokumen_penawaran') {
                $berita_acara = new \App\Models\TrxBeritaAcara();
                $berita_acara->sp3_id = $request["sp3_id"];
                $berita_acara->step_process = 'evaluasi_dokumen_penawaran';
                $berita_acara->nomor_spr = $request["nomor_evaluasi_penawaran"];
                if ($request->hasFile('file_evaluasi_penawaran')) {
                    $file_berita = $request->file('file_evaluasi_penawaran');
                    $extensions = $file_berita->getClientOriginalExtension();
                    $new_names = 'evaluasi-penawaran' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extensions;
                    $file_berita->move(public_path('file/sp3'), $new_names);
                    $berita_acara->file_berita_acara = $new_names;
                }
                $berita_acara->save();
            } else if ($request["type"] == 'pengumuman_admin_teknis') {
                $berita_acara = new \App\Models\TrxBeritaAcara();
                $berita_acara->sp3_id = $request["sp3_id"];
                $berita_acara->step_process = 'pengumuman_admin_teknis';
                if ($request->hasFile('file_admin_teknis')) {
                    $file_berita = $request->file('file_admin_teknis');
                    $extensions = $file_berita->getClientOriginalExtension();
                    $new_names = 'pengumuman-admin-teknis' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extensions;
                    $file_berita->move(public_path('file/sp3'), $new_names);
                    $berita_acara->file_berita_acara = $new_names;
                }
                $berita_acara->save();
            } else if ($request["type"] == 'evaluasi_dokumen_penawaran_harga') {
                $berita_acara = new \App\Models\TrxBeritaAcara();
                $berita_acara->sp3_id = $request["sp3_id"];
                $berita_acara->step_process = 'evaluasi_dokumen_penawaran_harga';
                if ($request->hasFile('file_evaluasi_harga')) {
                    $file_berita = $request->file('file_evaluasi_harga');
                    $extensions = $file_berita->getClientOriginalExtension();
                    $new_names = 'pengumuman-evaluasi-harga' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extensions;
                    $file_berita->move(public_path('file/sp3'), $new_names);
                    $berita_acara->file_berita_acara = $new_names;
                }
                $berita_acara->save();
            }
        }

        return redirect(route('procurement.show', $request["sp3_id"]));
    }

    public function save_klarifikasi(Request $request)
    {
        foreach ($request["vendor_code"] as $key => $val) {
            $data = new \App\Models\TrxKlarifikasiKonfirmasi();
            $data->sp3_id = $request["sp3_id"];
            $data->vendor_code = $val;
            $data->tanggal_kkn = $request["tanggal_kkn"][$key];
            $data->hps_pagu = str_replace('.', '', $request["hps_pagu"])[$key];
            $data->harga_negosiasi = str_replace('.', '', $request["harga_negosiasi"])[$key];
            $data->keterangan = $request["catatan_kkn"][$key];
            $data->created_by = Auth::user()->id;
            $data->save();
        }
        // UPDATE STATUS USULAN CALON PEMENANG
        $status = \App\Models\SP3::find($request["sp3_id"]);
        $status->proses_st = 'PROSES_BAHP';
        $status->save();

        // SAVE BERITA ACARA
        $berita_acara = new \App\Models\TrxBeritaAcara();
        $berita_acara->sp3_id = $request["sp3_id"];
        $berita_acara->step_process = 'kkn';
        $berita_acara->nomor_spr = $request["nomor_kkn"];
        if ($request->hasFile('file_kkn')) {
            $file_berita = $request->file('file_kkn');
            $extensions = $file_berita->getClientOriginalExtension();
            $new_names = 'berita-kkn' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extensions;
            $file_berita->move(public_path('file/sp3'), $new_names);
            $berita_acara->file_berita_acara = $new_names;
        }
        $berita_acara->save();
        return redirect(route('procurement.show', $request["sp3_id"]));
    }

    public function save_undangan_kkn(Request $request)
    {
        foreach ($request["vendor_code"] as $key => $val) {
            $data = new \App\Models\TrxUndanganKkn();
            $data->sp3_id = $request["sp3_id"];
            $data->vendor_code = $val;
            $data->tanggal_undangan_kkn = $request["tanggal_kkn"][$key];
            $data->notes = $request["catatan_kkn"][$key];
            $data->save();
        }
        // SAVE BERITA ACARA
        $berita_acara = new \App\Models\TrxBeritaAcara();
        $berita_acara->sp3_id = $request["sp3_id"];
        $berita_acara->step_process = 'undangan_kkn';
        $berita_acara->nomor_spr = $request["nomor_undangan_kkn"];
        $berita_acara->save();
        return redirect(route('procurement.show', $request["sp3_id"]));
    }

    public function save_pemenang(Request $request)
    {
        $pemenang = \App\Models\TrxPenetapanPemenang::find($request["pemenang_id"]);
        if ($pemenang) {
            $data = \App\Models\TrxPenetapanPemenang::find($request["pemenang_id"]);
            $data->catatan = $request["catatan"];
            $data->vendor_code = $request["vendor_code"];
            $data->nomor_pemenang = $request["nomor_pemenang"];
            $data->sp3_id = $request["sp3_id"];
            if ($request->file('berita_acara_pemenang')) {
                $file = $request->file('berita_acara_pemenang');
                $extension = $file->getClientOriginalExtension();
                $new_name = 'file-berita-acara-pemenang' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $file->move(public_path('file/sp3'), $new_name);
                $data->file_berita_acara = $new_name;
            }
            $data->status = 'pemenang';
            $data->save();
            if ($data) {
                // UPDATE STATUS PENETAPAN PEMENANG
                $status = \App\Models\SP3::find($request["sp3_id"]);
                $status->proses_st = 'PROSES_DC';
                $status->save();
            }
        } else {
            $data = new \App\Models\TrxPenetapanPemenang();
            $data->catatan = $request["catatan"];
            $data->vendor_code = $request["vendor_code"];
            $data->nomor_usulan_pemenang = $request["nomor_usulan_pemenang"];
            $data->sp3_id = $request["sp3_id"];
            if ($request->file('berita_acara_pemenang')) {
                $file = $request->file('berita_acara_pemenang');
                $extension = $file->getClientOriginalExtension();
                $new_name = 'file-berita-acara-pemenang' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
                $file->move(public_path('file/sp3'), $new_name);
            }
            $data->file_berita_acara = $new_name;
            $data->status = 'usulan';
            $data->save();
            // UPDATE STATUS PENETAPAN PEMENANG
            $status = \App\Models\SP3::find($request["sp3_id"]);
            $status->proses_st = 'PROSES_PCP';
            $status->save();
        }

        return redirect(route('procurement.show', $request["sp3_id"]));
    }

    public function save_bahp(Request $request)
    {
        // dd($request->all());
        foreach ($request["vendor_code"] as $key => $val) {
            $data = new \App\Models\TrxBeritaAcaraHasilPelelangan();
            $data->tanggal_berita_acara = $request["tanggal_berita_acara"][$key];
            $data->catatan_berita_acara = $request["catatan_berita_acara"][$key];
            $data->vendor_code = $val;
            $data->sp3_id = $request["sp3_id"];
            $data->save();
        }
        // UPDATE STATUS PENETAPAN PEMENANG
        $status = \App\Models\SP3::find($request["sp3_id"]);
        $status->proses_st = 'PROSES_UPCP';
        $status->save();

        // SAVE BERITA ACARA
        $berita_acara = new \App\Models\TrxBeritaAcara();
        $berita_acara->sp3_id = $request["sp3_id"];
        $berita_acara->step_process = 'berita_hasil_pelelangan';
        $berita_acara->nomor_spr = $request["nomor_bahp"];
        if ($request->hasFile('file_bahp')) {
            $file_berita = $request->file('file_bahp');
            $extensions = $file_berita->getClientOriginalExtension();
            $new_names = 'berita-bahp' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extensions;
            $file_berita->move(public_path('file/sp3'), $new_names);
            $berita_acara->file_berita_acara = $new_names;
        }
        $berita_acara->save();
        return redirect(route('procurement.show', $request["sp3_id"]));
    }

    public function save_spr(Request $request)
    {
        if ($request["trx_spr_id"]) {
            $data = \App\Models\TrxSpr::find($request["trx_spr_id"]);
        } else {
            $data = new \App\Models\TrxSpr();
        }
        if ($request->hasFile('file_jamlak')) {
            $file = $request->file('file_jamlak');
            $extension = $file->getClientOriginalExtension();
            $new_name = 'dokumen-jamlak' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
            $file->move(public_path('file/sp3'), $new_name);
            $data->file_jamlak = $new_name;
        }
        if ($request->hasFile('file_spr')) {
            $file = $request->file('file_spr');
            $extension = $file->getClientOriginalExtension();
            $new_name = 'dokumen-spr' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
            $file->move(public_path('file/sp3'), $new_name);
            $data->file_spr = $new_name;
        }
        $data->total_hari_kerja = $request["workDays"];
        $data->uncontrolled_days = $request["uncontrolledDays"];
        $data->catatan_spr = $request["catatan"];
        $data->vendor_code = $request["vendor_code"];
        $data->sp3_id = $request["sp3_id"];
        $data->nomor_spr = $request["nomor_spr"];
        $data->nama_ttd = $request["nama_ttd"];
        $data->jabatan_ttd = $request["jabatan_ttd"];
        $data->save();
        return redirect(route('procurement.show', $request["sp3_id"]));
    }

    public function getSp3(Request $request)
    {
        $data = \App\Models\SP3::orderBy('sp3_id', 'desc')
            ->where('sp3_id', $request["id"])
            ->first();
        $jadwal = \App\Models\TrxJadwalPelaksaan::where('sp3_id', $data->sp3_id)->first();
        return response()->json(['data' => $data, 'jadwal' => $jadwal]);
    }

    public function data_rks(Request $request)
    {
        $data = \App\Models\DraftRks::orderBy('sp3_id', 'desc')
            ->where('sp3_id', $request["sp3_id"])
            ->get();
        return DataTables::of($data)
            ->addColumn('judul_pengadaan', function ($row) {
                return 'CONTOH JUDUL PENGADAAN';
            })
            ->addColumn('metode_submit', function ($row) {
                return 'Sampul 1';
            })
            ->addColumn('file', function ($row) {
                return '<a href=' . asset('file/rks/' . $row->file) . '><i class="uil uil-file"></i></a>';
            })
            ->addColumn('file_draft', function ($row) {
                return '<a href=' . asset('file/rks/' . $row->file_draft) . '><i class="uil uil-file"></i></a>';
            })
            ->addColumn('catatan', function ($row) {
                return 'catatan';
            })
            ->rawColumns(['action', 'proses_st', 'file', 'file_draft'])
            ->make(true);
    }

    public function data(Request $request)
    {
        $data = \App\Models\SP3::orderBy('sp3_id', 'desc')
            ->where('proses_st', 'PROSES_RRKS')
            ->orWhere('proses_st', 'PROSES_URKS')
            ->orWhere('proses_st', 'PROSES_DRKS')
            ->orWhere('proses_st', 'PROSES_PP')
            ->orWhere('proses_st', 'PROSES_AL')
            ->orWhere('proses_st', 'PROSES_PDP')
            ->orWhere('proses_st', 'PROSES_PPDP')
            ->orWhere('proses_st', 'PROSES_KKN')
            ->orWhere('proses_st', 'PROSES_EP')
            ->orWhere('proses_st', 'PROSES_EDH')
            ->orWhere('proses_st', 'PROSES_UPCP')
            ->orWhere('proses_st', 'PROSES_PCP')
            ->orWhere('proses_st', 'PROSES_PGL')
            ->orWhere('proses_st', 'SPR')
            ->orWhere('proses_st', 'PROSES_DC')
            ->orWhere('proses_st', 'PROSES_UJP')
            ->orWhere('proses_st', 'PROSES_VJP')
            ->orWhere('proses_st', 'PROSES_RDC')
            ->orWhere('proses_st', 'PROSES_VAC')
            ->orWhere('proses_st', 'PROSES_ALG')
            ->orWhere('proses_st', 'PROSES_APU')
            ->orWhere('proses_st', 'PROSES_KAC')
            ->orWhere('proses_st', 'PROSES_CR')
            ->get();
        return DataTables::of($data)
            ->addColumn('no_sp3', function ($row) {
                return '<a href="' . route('procurement.show', $row->sp3_id) . '">
                           ' . $row->no_sp3 . '
                        </a>';
            })
            ->addColumn('nilai_pr', function ($row) {
                return number_format($row->nilai_pr, 2);
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
                if (
                    $row->proses_st == 'PROSES_PCP' || $row->proses_st == 'SPR' || $row->proses_st == 'PROSES_DC'
                    || $row->proses_st == 'PROSES_UJP' || $row->proses_st == 'PROSES_VJP' || $row->proses_st == 'PROSES_RDC'
                    || $row->proses_st == 'PROSES_VAC' || $row->proses_st == 'PROSES_ALG' || $row->proses_st == 'PROSES_KAC'
                    || $row->proses_st == 'PROSES_CR'
                ) {
                    $action = '<a href="' . route('procurement.show', $row->sp3_id) . '" target="_blank">
                                    <button class="btn btn-rounded btn-primary btn-sm">
                                        <i class="uil uil-search"></i> 
                                    </button>
                                </a>
                                <a href="' . route('evaluasi.print.sk') . '?id=' . $row->sp3_id . '" target="_blank">
                                    <button class="btn btn-primary btn-sm btn-rounded">
                                        <i class="uil uil-print"></i> 
                                    </button>
                                </a>';
                } else {
                    $action = '<a href="' . route('procurement.show', $row->sp3_id) . '" target="_blank">
                                    <button class="btn btn-rounded btn-primary btn-sm">
                                        <i class="uil uil-search"></i> 
                                    </button>
                               </a>';
                }
                // }
                return $action;
            })
            ->rawColumns(['action', 'proses_st', 'no_sp3'])
            ->make(true);
    }
}
