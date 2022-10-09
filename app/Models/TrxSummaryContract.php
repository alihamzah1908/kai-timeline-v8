<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxSummaryContract extends Model
{
    use HasFactory;
    protected $table = 'public.trx_summary_contract';
    protected $primaryKey = 'trx_summary_contract_id';
    protected $fillable = [
        'nomor_contract',
        'tgl_contract',
        'total_day_work',
        'uncontroll_days',
        'file_perjanjian',
        'notes',
        'created_by',
        'updated_by'
    ];
}
