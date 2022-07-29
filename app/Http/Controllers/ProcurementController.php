<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

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

    public function reviewing(Request $request)
    {
        $status = \App\Models\SP3::find($request["sp3_id"]);
        $status->proses_st = 'PROSES_RRKS';
        $status->save();
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
                return '<a href='. asset('file/rks/' . $row->file) .'><i class="uil uil-file"></i></a>';
            })
            ->addColumn('file_draft', function ($row) {
                return '<a href='. asset('file/rks/' . $row->file_draft) .'><i class="uil uil-file"></i></a>';
            })
            ->addColumn('catatan', function ($row) {
                return 'catatan';
            })
            ->rawColumns(['action', 'proses_st','file','file_draft'])
            ->make(true);
    }

    public function data(Request $request)
    {
        $data = \App\Models\SP3::orderBy('sp3_id', 'desc')
            ->where('proses_st', 'PROSES_RRKS')
            ->orWhere('proses_st', 'PROSES_DRKS')
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
                }
            })
            ->addColumn('action', function ($row) {
                if ($row->proses_st == 'PROSES_DRKS') {
                    $action = '<a class="dropdown-item approve-rks" role="presentation" href="javascript:void(0)" data-id=' . $row->sp3_id . '><i class="uil uil-upload"></i> Drafting RKS</a>';
                } else if ($row->proses_st == 'PROSES_RRKS') {
                    $action = '<a class="dropdown-item approve-rks" role="presentation" href="javascript:void(0)" data-id=' . $row->sp3_id . '><i class="uil uil-upload"></i> Reviewing RKS</a>';
                }
                $btn = '<div class="dropdown">
                            <button class="btn btn-rounded btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="true" type="button">Action
                                <i class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg></i>
                                <div></div>
                            </button>
                            <div class="dropdown-menu" role="menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                ' . $action . '
                            </div>
                        </div>';

                return $btn;
            })
            ->rawColumns(['action', 'proses_st'])
            ->make(true);
    }
}
