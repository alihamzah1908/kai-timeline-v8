<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehousePart extends Model
{
    use HasFactory;
    protected $table = 'public.warehouse_part';
    protected $primaryKey = 'warehouse_part_id';
    protected $fillable = [
        'warehouse_part_id',
        'pint',
        'sloc',
        'material',
        'material_description',
        'bun',
        'unrestricted',
        'value_unrestricted',
        'mtyp',
        'created_by',
        'updated_by'
    ];
}
