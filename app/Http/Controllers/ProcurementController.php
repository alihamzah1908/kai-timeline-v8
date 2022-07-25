<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $files = new \App\Models\DraftRks();
            $files->sp3_id = $request["sp3_id"];
            $files->tanggal_rks = $request["tanggal_rks"];
            $extension = $file->getClientOriginalExtension();
            $new_name = 'SP3' . "-" . now()->format('Y-m-d-H-i-s') . "." . $extension;
            $file->move(public_path('file/rks'), $new_name);
            $files->file = $new_name;
            $files->save();
            if ($files) {
                $sp3 = \App\Models\SP3::find($request["sp3_id"]);
                $sp3->proses_st = 'PROSES_DPBJ';
                $sp3->save();
            }
            return redirect(route('list.pbj'));
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
        $data = \App\Models\SP3::orderBy('sp3_id', 'desc')
            ->where('proses_st', 'PROSES_ASP3')
            ->orWhere('proses_st', 'PROSES_DPBJ')
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
                if ($row->proses_st == 'PROSES_DPBJ') {
                    return '<badges class="badge badge-warning">Draft RKS</badges>';
                } else if ($row->proses_st == 'PROSES_ASP3') {
                    return '<badges class="badge badge-success">Approved SP3</badges>';
                }
            })
            ->addColumn('action', function ($row) {
                if ($row->proses_st == 'PROSES_DPBJ') {
                    $action = '<a class="dropdown-item approve-rks" role="presentation" href="javascript:void(0)" data-id=' . $row->sp3_id . '><i class="uil uil-upload"></i>  Approve RKS</a>';
                } else {
                    $action = '<a class="dropdown-item draft-rks" role="presentation" href="javascript:void(0)" data-id=' . $row->sp3_id . '><i class="uil uil-upload"></i> Drafting RKS </a>';
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
