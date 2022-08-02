<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxEvaluasiPenawaran extends Model
{
    use HasFactory;
    protected $table = 'public.trx_evaluasi_dokumen_penawaran';
    protected $primaryKey = 'document_evaluasi_id';
    protected $fillable = [
        'document_evaluasi_id',
        'sp3_id',
        'vendor_code',
        'metode',
        'penilaian_dokumen',
        'penilaian_admin',
        'penilaian_harga',
        'tanggal_evaluasi_dokumen',
        'tanggal_evaluasi_harga',
        'tanggal_evaluasi_admin',
        'file_evaluasi_dokumen',
        'file_evaluasi_teknis',
        'file_evaluasi_harga',
        'keterangan_evaluasi_dokumen',
        'keterangan_evaluasi_admin',
        'keterangan_evaluasi_harga',
        'created_by',
        'updated_by',
    ];
}
