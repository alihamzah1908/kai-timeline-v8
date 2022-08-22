<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxSpr extends Model
{
    use HasFactory;

    protected $table = 'public.trx_spr';
    protected $primaryKey = 'trx_spr_id';
    protected $fillable = [
        'trx_spr_id',
        'sp3_id',
        'vendor_code',
        'total_hari_kerja',
        'uncontrolled_days',
        'catatan_spr',
        'file_jamlak',
        'created_by',
        'updated_by',
    ];
}
