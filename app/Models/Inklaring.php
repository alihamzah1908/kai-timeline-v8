<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inklaring extends Model
{
    use HasFactory;

    protected $table = 'public.inklaring';
    protected $primaryKey = 'trx_inklaring_id';
    protected $fillable = [
        'trx_inklaring_id',
        'judul_pengadaan',
        'vendor_name',
        'thn_aggrn_rkap',
        'kategori_import',
        'jenis_kontrak',
        'no_kontrak',
        'tgl_kontrak',
        'file_kontrak',
        'non_termin',
        'mppl_kontrak',
        'no_jamlak',
        'tgl_jamlak',
        'file_jamlak',
        'mppl_jamlak',
        'start_jamlak',
        'end_jamlak',
        'ktgr_pmbyrn_l',
        'surat_perm_pemb_lc',
        'tgl_pemb_lc',
        'no_tgl_lc',
        'doc_lc',
        'file_lc',
        'ket_lc',
        'eta_pengiriman',
        'eta_tiba',
        'no_tgl_hbl',
        'tgl_hbl',
        'tgl_inv_hbl',
        'tgl_pck_list_hbl',
        'legal_kci',
        'tgl_sktd',
        'srt_kuasa_do',
        'srt_kuasa_pabean',
        'tgl_sppb',
        'tgl_dokumen_tambahan_hbl',
        'keterangan',
        'tgl_cds',
        'tgl_diterima',
        'ket_cds',
        'tgl_pengujian_bast',
        'tgl_bast',
        'ket_bast',
        'no_purpose',
        'tgl_bayar_vendor',
        'ket_pemb',
        'no_invoice',
        'tgl_lapor_simodis',
        'ket_simodis',
        'status_monitoring',
        'note',
        'created_at',
        'created_by',
        'updated_at',
    ];
}
