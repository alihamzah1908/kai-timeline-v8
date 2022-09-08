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

    public function get_directorate_opex(Request $request)
    {
        $timeline = DB::table('trx_timeline as a')
            ->get();
        return response()->json([
            "cu" => $timeline->where('directorate_cd', 'CU')
                ->where('beban_biaya', 'OPEX')
                ->count(),
            "cf" => $timeline->where('directorate_cd', 'CF')
                ->where('beban_biaya', 'OPEX')
                ->count(),
            "ct" => $timeline->where('directorate_cd', 'CT')
                ->where('beban_biaya', 'OPEX')
                ->count(),
            "co" => $timeline->where('directorate_cd', 'CO')
                ->where('beban_biaya', 'OPEX')
                ->count(),
            "ka_bandara" => $timeline->where('directorate_cd', 'KB')
                ->where('beban_biaya', 'OPEX')
                ->count(),
        ]);
    }

    public function get_directorate_capex(Request $request)
    {
        $timeline = DB::table('trx_timeline as a')
            ->get();
        return response()->json([
            "cu" => $timeline->where('directorate_cd', 'CU')
                ->where('beban_biaya', 'CAPEX')
                ->count(),
            "cf" => $timeline->where('directorate_cd', 'CF')
                ->where('beban_biaya', 'CAPEX')
                ->count(),
            "ct" => $timeline->where('directorate_cd', 'CT')
                ->where('beban_biaya', 'CAPEX')
                ->count(),
            "co" => $timeline->where('directorate_cd', 'CO')
                ->where('beban_biaya', 'CAPEX')
                ->count(),
            "ka_bandara" => $timeline->where('directorate_cd', 'KB')
                ->where('beban_biaya', 'CAPEX')
                ->count(),
        ]);
    }

    public function get_realisasi_unit(Request $request)
    {
        $timeline = DB::table('trx_timeline as a')
            ->get();
        return response()->json([
            "cus" => $timeline->where('division_cd', 'CUS')
                ->where('beban_biaya', 'OPEX')
                ->count(),
            "cfh" => $timeline->where('division_cd', 'CFH')
                ->where('beban_biaya', 'OPEX')
                ->count(),
            "cti" => $timeline->where('division_cd', 'CTI')
                ->where('beban_biaya', 'OPEX')
                ->count(),
            "ctp" => $timeline->where('division_cd', 'CTP')
                ->where('beban_biaya', 'OPEX')
                ->count(),
            "cts" => $timeline->where('division_cd', 'CTS')
                ->where('beban_biaya', 'OPEX')
                ->count(),
            "coc" => $timeline->where('division_cd', 'COC')
                ->where('beban_biaya', 'OPEX')
                ->count(),
            "coh" => $timeline->where('division_cd', 'COH')
                ->where('beban_biaya', 'OPEX')
                ->count(),
            "cos" => $timeline->where('division_cd', 'COS')
                ->where('beban_biaya', 'OPEX')
                ->count(),
            "cot" => $timeline->where('division_cd', 'COT')
                ->where('beban_biaya', 'OPEX')
                ->count(),
            "cola" => $timeline->where('division_cd', 'COLA')
                ->where('beban_biaya', 'OPEX')
                ->count(),
            "ka_bandara" => $timeline->where('division_cd', 'KB')
                ->where('beban_biaya', 'OPEX')
                ->count(),
        ]);
    }

    public function get_pengadaan_sarana(Request $request)
    {
        $timeline = DB::table('trx_timeline')
            ->get();
        return response()->json([
            "cus" => $timeline->where('division_cd', 'CUS')
                ->where('pbj', 'Sarana')
                ->count(),
            "cfh" => $timeline->where('division_cd', 'CFH')
                ->where('pbj', 'Sarana')
                ->count(),
            "cti" => $timeline->where('division_cd', 'CTI')
                ->where('pbj', 'Sarana')
                ->count(),
            "ctp" => $timeline->where('division_cd', 'CTP')
                ->where('pbj', 'Sarana')
                ->count(),
            "cts" => $timeline->where('division_cd', 'CTS')
                ->where('pbj', 'Sarana')
                ->count(),
            "coc" => $timeline->where('division_cd', 'COC')
                ->where('pbj', 'Sarana')
                ->count(),
            "coh" => $timeline->where('division_cd', 'COH')
                ->where('pbj', 'Sarana')
                ->count(),
            "cos" => $timeline->where('division_cd', 'COS')
                ->where('pbj', 'OPEX')
                ->count(),
            "cot" => $timeline->where('division_cd', 'COT')
                ->where('pbj', 'Sarana')
                ->count(),
            "cola" => $timeline->where('division_cd', 'COLA')
                ->where('pbj', 'Sarana')
                ->count(),
        ]);
    }

    public function get_pengadaan_non_sarana(Request $request)
    {
        $timeline = DB::table('trx_timeline')
            ->get();
        return response()->json([
            "cus" => $timeline->where('division_cd', 'CUS')
                ->where('pbj', 'Non Sarana')
                ->count(),
            "cfh" => $timeline->where('division_cd', 'CFH')
                ->where('pbj', 'Non Sarana')
                ->count(),
            "cti" => $timeline->where('division_cd', 'CTI')
                ->where('pbj', 'Non Sarana')
                ->count(),
            "ctp" => $timeline->where('division_cd', 'CTP')
                ->where('pbj', 'Non Sarana')
                ->count(),
            "cts" => $timeline->where('division_cd', 'CTS')
                ->where('pbj', 'Non Sarana')
                ->count(),
            "coc" => $timeline->where('division_cd', 'COC')
                ->where('pbj', 'Non Sarana')
                ->count(),
            "coh" => $timeline->where('division_cd', 'COH')
                ->where('pbj', 'Non Sarana')
                ->count(),
            "cos" => $timeline->where('division_cd', 'COS')
                ->where('pbj', 'Non Sarana')
                ->count(),
            "cot" => $timeline->where('division_cd', 'COT')
                ->where('pbj', 'Non Sarana')
                ->count(),
            "cola" => $timeline->where('division_cd', 'COLA')
                ->where('pbj', 'Non Sarana')
                ->count(),
        ]);
    }

    public function get_monitroing_pengadaan_sarana(Request $request)
    {
        $timeline = DB::table('trx_timeline')
            ->get();
        return response()->json([
            "penunjukan_langsung" => $timeline->where('pbj', 'Non Sarana')
                ->count(),
            "pemilihan_langsung" => $timeline->where('pbj', 'Non Sarana')
                ->count(),
            "pelelangan_terbuka" => $timeline->where('pbj', 'Non Sarana')
                ->count(),
        ]);
    }

    public function get_warehouse_part(Request $request)
    {
        if ($request["warehouse"]) {
            $timeline = DB::select("SELECT sloc, material_description, value_unrestricted
            FROM warehouse_part WHERE sloc='" . $request["warehouse"] ."' 
            AND value_unrestricted !='0'
            ORDER BY value_unrestricted desc
            LIMIT 20");
        } else {
            $timeline = DB::select("SELECT material_description, value_unrestricted 
            FROM warehouse_part WHERE value_unrestricted !='0' 
            ORDER BY value_unrestricted desc
            LIMIT 20");
        }
        $arr = [];
        foreach ($timeline as $val) {
            $arrx["name"] = $val->material_description;
            $arrx["y"] = (int)$val->value_unrestricted;
            $arrx["color"] = '#ff3300';
            $arr[] = $arrx;
        }
        return response()->json($arr);
    }
}
