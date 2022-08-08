<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxBeritaAcaraHasilPelelangan extends Model
{
    use HasFactory;
    protected $table = 'public.trx_berita_acara_hasil_pelelangan';
    protected $primaryKey = 'berita_acara_id';
    protected $fillable = [
        'berita_acara_id',
        'sp3_id',
        'vendor_code',
        'file_berita_acara',
        'created_by',
        'updated_by',
    ];
}
