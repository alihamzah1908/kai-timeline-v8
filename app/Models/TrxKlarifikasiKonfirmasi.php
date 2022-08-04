<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxKlarifikasiKonfirmasi extends Model
{
    use HasFactory;
    protected $table = 'public.trx_klasifikasi_konfirmasi_negosiasi';
    protected $primaryKey = 'klasifikasi_id';
    protected $fillable = [
        'klasifikasi_id',
        'sp3_id',
        'vendor_code',
        'tanggal_kkn',
        'hps_pagu',
        'harga_negosiasi',
        'keterangan',
        'created_by',
        'updated_by',
    ];
}
