<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxApprovalUser extends Model
{
    use HasFactory;
    protected $table = 'public.trx_approval_user';
    protected $primaryKey = 'approval_user_contract_id';
    protected $fillable = [
        'approval_user_contract_id',
        'report_pbj_contract_id',
        'sp3_id',
        'file_approval_user',
        'tanggal_submit',
        'catatan_user',
        'created_by',
        'updated_by'
    ];
}
