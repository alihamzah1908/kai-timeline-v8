<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MappingStatus extends Model
{
    use HasFactory;
    protected $table = 'auth.mapping_type';
    protected $primaryKey = 'mapping_id';
    protected $fillable = [
        'mapping_id',
        'mapping_cd',
        'type_column',
        'mapping_desc',
        'keterangan',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];
}
