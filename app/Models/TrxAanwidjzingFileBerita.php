<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxAanwidjzingFileBerita extends Model
{
    use HasFactory;

    protected $table = 'public.trx_file_berita_acara_aanwidjzing';
    protected $primaryKey = 'berita_acara_id';
    protected $fillable = [
        'berita_acara_id',
        'aanwidjzing_id',
        'file_berita_acara',
        'created_by',
        'updated_by',
    ];
}
