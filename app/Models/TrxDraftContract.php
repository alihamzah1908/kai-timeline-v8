<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxDraftContract extends Model
{
    use HasFactory;
    protected $table = 'public.trx_draft_contract';
    protected $primaryKey = 'draft_contract_id';
    protected $fillable = [
        'draft_contract_id',
        'report_pbj_contract_id',
        'sp3_id',
        'file_draft_contract',
        'tanggal_submit',
        'tanggal_end_submit',
        'notes',
        'created_by',
        'updated_by'
    ];
}
