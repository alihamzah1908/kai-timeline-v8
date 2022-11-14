<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxNotifikasi extends Model
{
    use HasFactory;
    protected $table = 'public.notifikasi';
    protected $primaryKey = 'trx_notifikasi_id';
    protected $fillable = [
        'trx_notifikasi_id',
        'is_read',
        'created_by',
        'department',
        'type',
        'created_by',
        'updated_by',
    ];
}
