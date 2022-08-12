<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxKciContract extends Model
{
    use HasFactory;
    protected $table = 'public.trx_kci_contract';
    protected $primaryKey = 'kci_contract_id';
    protected $fillable = [
        'kci_contract_id',
        'report_pbj_contract_id',
        'sp3_id',
        'file_kci_contract',
        'tanggal_submit',
        'created_by',
        'updated_by'
    ];
}
