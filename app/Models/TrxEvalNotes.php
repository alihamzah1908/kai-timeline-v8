<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxEvalNotes extends Model
{
    use HasFactory;
    protected $table = 'public.trx_eval_notes';
    protected $primaryKey = 'trx_eval_notes_id';
    protected $fillable = [
        'trx_eval_notes_id',
        'eval_id',
        'catatan_evaluasi',
        'created_by',
        'updated_by'
    ];
}
