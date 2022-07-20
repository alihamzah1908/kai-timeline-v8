<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function get_program(Request $request)
    {
        $timeline = DB::table('trx_timeline as a')
            ->get();
        $arr["name"] = 'Submitted Proposal';
        $arr["data"] = [
            'y' => $timeline->where('proses_st', 'PROSES_ST')->count(),
            'color' => 'red',
        ];
        $arr["url"] = '/timeline/task-approval';
        $arr["color"] = 'red';
        return response()->json(["data" => $arr]);
    }

    public function get_department(Request $request)
    {
        $timeline = DB::table('trx_timeline as a')
            ->get();
        $arr["name"] = 'CUS';
        $arr["data"] = [
            'y' => $timeline->where('proses_st', 'PROSES_ST')->count(),
            'color' => 'red',
        ];
        $arr["url"] = '/timeline/task-approval';
        $arr["color"] = 'red';
        return response()->json(["data" => $arr]);
    }
}
