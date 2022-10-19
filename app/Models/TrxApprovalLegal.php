<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxApprovalLegal extends Model
{
    use HasFactory;

    protected $table = 'public.trx_approval_legal';
    protected $primaryKey = 'approval_legal_contract_id';
    protected $fillable = [
        'approval_legal_contract_id',
        'report_pbj_contract_id',
        'sp3_id',
        'file_approval_legal',
        'tanggal_submit',
        'catatan_user',
        'created_by',
        'updated_by'
    ];
}
