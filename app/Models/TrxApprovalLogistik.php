<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxApprovalLogistik extends Model
{
    use HasFactory;
    protected $table = 'public.trx_approval_logistik';
    protected $primaryKey = 'approval_contract_id';
    protected $fillable = [
        'approval_contract_id',
        'report_pbj_contract_id',
        'sp3_id',
        'file_approval_logistik',
        'tanggal_submit',
        'catatan_approval_logistik',
        'created_by',
        'updated_by'
    ];
}
