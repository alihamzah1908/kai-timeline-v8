<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxJaminanContract extends Model
{
    use HasFactory;
    protected $table = 'public.trx_jaminan_contract';
    protected $primaryKey = 'performance_contract_id';
    protected $fillable = [
        'performance_contract_id',
        'report_pbj_contract_id',
        'sp3_id',
        'file_performance_contract',
        'tanggal_submit',
        'created_by',
        'updated_by'
    ];
}
