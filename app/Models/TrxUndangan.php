<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxUndangan extends Model
{
    use HasFactory;
    protected $table = 'public.trx_undangan_rks';
    protected $primaryKey = 'undangan_id';
    protected $fillable = [
        'undangan_id',
        'sp3_id',
        'tanggal_rks',
        'file_penawaran',
        'file_dokumen',
        'metode',
        'catatan',
        'created_by',
        'updated_by'
    ];
}
