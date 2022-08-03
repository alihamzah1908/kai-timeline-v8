<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxPenetapanPemenang extends Model
{
    use HasFactory;
    protected $table = 'public.trx_penetapan_pemenang';
    protected $primaryKey = 'pemenang_id';
    protected $fillable = [
        'pemenang_id',
        'sp3_id',
        'vendor_code',
        'file_berita_acara',
        'catatan',
        'created_by',
        'updated_by',
    ];
}
