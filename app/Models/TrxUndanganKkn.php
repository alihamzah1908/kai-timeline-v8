<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxUndanganKkn extends Model
{
    use HasFactory;
    protected $table = 'public.trx_undangan_kkn';
    protected $primaryKey = 'trx_undangan_id';
    protected $fillable = [
        'trx_undangan_id',
        'sp3_id',
        'vendor_name',
        'tanggal_undangan_kkn',
        'notes',
        'created_by',
        'updated_by'
    ];
}
