<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxVendorContract extends Model
{
    use HasFactory;
    protected $table = 'public.trx_vendor_contract';
    protected $primaryKey = 'vendor_contract_id';
    protected $fillable = [
        'vendor_contract_id',
        'report_pbj_contract_id',
        'sp3_id',
        'file_vendor_contract',
        'tanggal_submit',
        'created_by',
        'updated_by'
    ];
}
