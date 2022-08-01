<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
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
        // dd($request->hasFile('file_penawaran'));
        if ($request->hasFile('file_penawaran')) {
            // PROPOSAL/TEMPLATE FILE
            $file_penawaran = $request->file('file_penawaran');
            $files = new \App\Models\DraftRks();
            $files->sp3_id = $request["sp3_id"];
            $extension = $file_penawaran->getClientOriginalExtension();
            $new_name = 'SP3' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
            $file_penawaran->move(public_path('file/rks'), $new_name);
            $files->file_penawaran = $new_name;

            // DRAFT FILE
            $file_dokumen = $request->file('file_dokumen');
            // dd($file_draft);
            $extension_draft = $file_dokumen->getClientOriginalExtension();
            $new_name_draft = 'SP3' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension_draft;
            $file_dokumen->move(public_path('file/rks'), $new_name_draft);
            $files->file_dokumen = $new_name_draft;
            $files->metode = $request["metode_dokumen"];
            $files->catatan = $request["catatan_rks"];
            $files->created_by = Auth::user()->id;
            $files->save();
            if ($files) {
                $sp3 = \App\Models\SP3::findOrFail($request["sp3_id"]);
                $sp3->proses_st = 'PROSES_RRKS';
                $sp3->save();
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
        $data["data"] = \App\Models\SP3::find($id);
        // dd($data);
        return view('procurement.show', $data);
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
                $status->proses_st = 'PROSES_PP';
            }
            $status->save();
            if ($status) {
                return response()->json(['status' => 200]);
            }
        }
    }

    public function save_tender(Request $request)
    {
        foreach ($request["vendor_code"] as $key => $val) {
            $tender = new \App\Models\TrxPesertaTender();
            $tender->sp3_id = $request["sp3_id"];
            $tender->vendor_code = $val;
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
        return response()->json(['status' => 200]);
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
            $aanwidjzing->save();
        }
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
            ->orWhere('proses_st', 'PROSES_DRKS')
            ->orWhere('proses_st', 'PROSES_PP')
            ->orWhere('proses_st', 'PROSES_AL')
            ->get();
        return DataTables::of($data)
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
                if ($row->proses_st == 'PROSES_DRKS') {
                    return '<badges class="badge badge-warning">Drafting RKS</badges>';
                } else if ($row->proses_st == 'PROSES_RRKS') {
                    return '<badges class="badge badge-success">Reviewing RKS</badges>';
                } else if ($row->proses_st == 'PROSES_PP') {
                    return '<badges class="badge badge-success">Pengumuman Pengadaan</badges>';
                } else if ($row->proses_st == 'PROSES_AL') {
                    return '<badges class="badge badge-success">Pelaksanaan Aanwidjzing</badges>';
                }
            })
            ->addColumn('action', function ($row) {
                // <a class="dropdown-item approve-rks" role="presentation" href="javascript:void(0)" data-id=' . $row->sp3_id . '><i class="uil uil-upload"></i> Reviewing RKS</a>';
                // <a class="dropdown-item approve-rks" role="presentation" href="javascript:void(0)" data-id=' . $row->sp3_id . '><i class="uil uil-upload"></i> Drafting RKS</a>';
                // if ($row->proses_st == 'PROSES_DRKS') {
                //     $action = '<a href="' . route('procurement.show', $row->sp3_id) . '">
                //                     <button class="btn btn-rounded btn-primary btn-sm"><i class="uil uil-search"></i> Show Detail</button>
                //                </a>';
                // } else if ($row->proses_st == 'PROSES_RRKS') {
                $action = '<a href="' . route('procurement.show', $row->sp3_id) . '">
                                    <button class="btn btn-rounded btn-primary btn-sm"><i class="uil uil-search"></i> Show Detail</button>
                               </a>';
                // }
                return $action;
            })
            ->rawColumns(['action', 'proses_st'])
            ->make(true);
    }
}
