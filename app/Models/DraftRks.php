<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DraftRks extends Model
{
    use HasFactory;
    protected $table = 'public.draft_rks_file';
    protected $primaryKey = 'rks_id';
    protected $fillable = [
        'rks_id',
        'sp3_id',
        'tanggal_rks',
        'file',
        'created_by',
        'updated_by'
    ];
}
