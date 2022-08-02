<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxDocumentPenawaran extends Model
{
    use HasFactory;
    protected $table = 'public.trx_document_penawaran';
    protected $primaryKey = 'document_penawaran_id';
    protected $fillable = [
        'document_penawaran_id',
        'sp3_id',
        'vendor_code',
        'tanggal_submit_dokumen',
        'tanggal_submit_teknis',
        'tanggal_submit_harga',
        'metode',
        'file_dokumen',
        'file_teknis',
        'file_harga',
        'file_berita_acara_dokumen',
        'file_berita_acara_harga',
        'keterangan_pemasukan_dokumen',
        'keterangan_pemasukan_harga',
        'created_by',
        'updated_by',
    ];
}
