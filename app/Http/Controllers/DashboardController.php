<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function get_dashboard_card(Request $request)
    {
        $timeline = DB::table('trx_timeline as a')
            ->get();
        $sp3 = DB::table('trx_timeline as a')
            ->get();
        return response()->json([
            'total_timeline' => $timeline->count(),
            'total_sp3' => $sp3->count(),
            'total_sp3_no_timeline' => $sp3->where('timeline_id', NULL)->count(),
            'total_overdue' => $sp3->where('proses_st', 'PROSES_DT')->count(),
        ]);
    }
    public function get_program(Request $request)
    {
        $timeline = DB::table('trx_timeline as a')
            ->get();
        $sp3 = DB::table('trx_sp3 as a')
            ->get();
        return response()->json([
            "st_timeline" => $timeline->where('proses_st', 'PROSES_ST')->count(),
            "st_sp3" => $sp3->where('proses_st', 'PROSES_ST')->count(),
            "at_timeline" => $timeline->where('proses_st', 'PROSES_AT')->count(),
            "at_sp3" => $sp3->where('proses_st', 'PROSES_AT')->count(),
            "ct_timeline" => $timeline->where('proses_st', 'PROSES_CT')->count(),
            "ct_sp3" => $timeline->where('proses_st', 'PROSES_CT')->count()
        ]);
    }

    public function get_department(Request $request)
    {
        $timeline = DB::table('trx_timeline as a')
            ->get();
        $sp3 = DB::table('trx_sp3 as a')
            ->get();
        return response()->json([
            "cus_timeline" => $timeline->where('division_cd', 'CUS')->count(),
            "cfh_timeline" => $sp3->where('division_cd', 'CFH')->count(),
            "cti_timeline" => $timeline->where('division_cd', 'CTI')->count(),
            "ctp_timeline" => $sp3->where('division_cd', 'CTP')->count(),
            "cts_timeline" => $timeline->where('division_cd', 'CTS')->count(),
            "coc_timeline" => $timeline->where('division_cd', 'COC')->count(),
            "coh_timeline" => $timeline->where('division_cd', 'COH')->count(),
            "cos_timeline" => $timeline->where('division_cd', 'COS')->count(),
            "cot_timeline" => $timeline->where('division_cd', 'COT')->count(),
            "cola_timeline" => $timeline->where('division_cd', 'COLA')->count(),
            "cus_sp3" => $sp3->where('division_cd', 'CUS')->count(),
            "cfh_sp3" => $sp3->where('division_cd', 'CFH')->count(),
            "cti_sp3" => $sp3->where('division_cd', 'CTI')->count(),
            "ctp_sp3" => $sp3->where('division_cd', 'CTP')->count(),
            "cts_sp3" => $sp3->where('division_cd', 'CTS')->count(),
            "coc_sp3" => $sp3->where('division_cd', 'COC')->count(),
            "coh_sp3" => $sp3->where('division_cd', 'COH')->count(),
            "cos_sp3" => $sp3->where('division_cd', 'COS')->count(),
            "cot_sp3" => $sp3->where('division_cd', 'COT')->count(),
            "cola_sp3" => $sp3->where('division_cd', 'COLA')->count()
        ]);
    }
}
