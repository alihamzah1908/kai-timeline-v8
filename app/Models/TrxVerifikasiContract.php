<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxVerifikasiContract extends Model
{
    use HasFactory;
    protected $table = 'public.trx_verifikasi_contract';
    protected $primaryKey = 'verifikasi_contract_id';
    protected $fillable = [
        'verifikasi_contract_id',
        'report_pbj_contract_id',
        'sp3_id',
        'file_verifikasi_contract',
        'tanggal_submit',
        'created_by',
        'updated_by'
    ];
}
