<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxBeritaAcara extends Model
{
    use HasFactory;
    protected $table = 'public.trx_berita_acara';
    protected $primaryKey = 'trx_berita_acara_id';
    protected $fillable = [
        'trx_berita_acara_id',
        'sp3_id',
        'nomor_spr',
        'step_process',
        'file_berita_acara',
        'created_by',
        'updated_by',
    ];
}
