<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxReviewContract extends Model
{
    use HasFactory;
    protected $table = 'public.trx_review_contract';
    protected $primaryKey = 'review_contract_id';
    protected $fillable = [
        'review_contract_id',
        'report_pbj_contract_id',
        'sp3_id',
        'file_review_contract',
        'tanggal_submit',
        'created_by',
        'updated_by'
    ];
}
