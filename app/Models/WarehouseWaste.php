<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehouseWaste extends Model
{
    use HasFactory;
    protected $table = 'public.warehouse_waste';
    protected $primaryKey = 'warehouse_waste_id';
    protected $fillable = [
        'warehouse_waste_id',
        'tanggal',
        'uraian',
        'proses_pengangkutan',
        'harga_kontrak',
        'realisasi_qty',
        'realisasi_penjualan',
        'total_penjualan',
        'created_by',
        'updated_by'
    ];
}
