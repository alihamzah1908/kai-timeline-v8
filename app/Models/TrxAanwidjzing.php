<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxAanwidjzing extends Model
{
    use HasFactory;
    protected $table = 'public.trx_aanwidjzing';
    protected $primaryKey = 'aanwidjzing_id';
    protected $fillable = [
        'aanwidjzing_id',
        'sp3_id',
        'vendor_code',
        'kehadiran',
        'created_by',
        'updated_by',
    ];
}
