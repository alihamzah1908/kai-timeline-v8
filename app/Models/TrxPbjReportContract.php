<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxPbjReportContract extends Model
{
    use HasFactory;
    protected $table = 'public.trx_pbj_contract_report';
    protected $primaryKey = 'report_pbj_contract_id';
    protected $fillable = [
        'report_pbj_contract_id',
        'sp3_id',
        'directorate_cd',
        'division_cd',
        'department_cd',
        'beban_biaya',
        'pbj',
        'judul_pengadaan',
        'nilai_rkap',
        'proc_id',
        'sp3_no',
        'tanggal_sp3',
        'metode',
        'npd_no',
        'tanggal_npd',
        'nilai_npd',
        'vendor',
        'pbj_status',
        'lokal_impor',
        'total_hari_kalender_pbj',
        'total_hari_kerja_pbj',
        'uncontrolled_pbj',
        'keterangan_pbj',
        'contract_status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',

    ];
}
