<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxJadwalPelaksaan extends Model
{
    use HasFactory;
    protected $table = 'public.trx_jadwal_pelaksanaan';
    protected $primaryKey = 'pelaksanaan_id';
    protected $fillable = [
        'pelaksanaan_id',
        'sp3_id',
        'penjelasan_start_date',
        'penjelasan_end_date',
        'pemasukan_start_date',
        'pemasukan_end_date',
        'penawaran_start_date',
        'penawaran_end_date',
        'evaluasi_start_date',
        'evaluasi_end_date',
        'pengumuman_start_date',
        'pengumuman_end_date',
        'tandatangan_start_date',
        'tandatangan_end_date',
        'created_by',
        'updated_by',
    ];
}
