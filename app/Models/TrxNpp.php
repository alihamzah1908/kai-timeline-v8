<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxNpp extends Model
{
    use HasFactory;

    protected $table = 'public.trx_npp';
    protected $primaryKey = 'npp_id';
    protected $fillable = [
        'npp_id',
        'no_pr',
        'no_rab',
        'no_justifikasi',
        'tanggal_pr',
        'tanggal_rab',
        'tanggal_justifikasi',
        'file_pr',
        'file_rab',
        'file_justifikasi',
        'created_by',
        'updated_by',
    ];
}
