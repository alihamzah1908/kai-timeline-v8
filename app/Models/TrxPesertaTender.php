<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxPesertaTender extends Model
{
    use HasFactory;
    protected $table = 'public.trx_peserta_tender';
    protected $primaryKey = 'peserta_tender_id';
    protected $fillable = [
        'peserta_tender_id',
        'sp3_id',
        'vendor_code',
        'phone_number',
        'pic_name',
        'email_corporate',
        'address',
        'created_by',
        'updated_by',
    ];
}
