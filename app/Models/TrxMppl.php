<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxMppl extends Model
{
    use HasFactory;
    protected $table = 'public.trx_mppl';
    protected $primaryKey = 'mppl_contract_id';
    protected $fillable = [
        'mppl_contract_id',
        'report_pbj_contract_id',
        'sp3_id',
        'start_date_mppl',
        'end_date_mppl',
        'off_days',
        'uncontroll_days',
        'catatan_user',
        'created_by',
        'updated_by'
    ];
}
