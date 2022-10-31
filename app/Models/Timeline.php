<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $table = 'public.trx_timeline';
    protected $primaryKey = 'timeline_id';
    protected $fillable = [
        'timeline_id',
        'directorate_cd',
        'division_cd',
        'department_cd',
        'judul_pengadaan',
        'no_pengadaan',
        'sumber_dana',
        'jenis_kontrak',
        'beban_biaya',
        'pbj',
        'nilai_pr',
        'type_tax',
        'nilai_tax',
        'start_date_pengadaan',
        'end_date_pengadaan',
        'proses_st',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

    public function get_user(){
        return $this->belongsTo('\App\Models\User','created_by','id');
    }
}
