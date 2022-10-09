<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BanksMaster extends Model
{
    use HasFactory;
    protected $table = 'bank_master';
    protected $primaryKey = 'id';
    protected $fillable = [
        'bank_name',
        'bank_address',
        'telp',
        'fax',
        'website',
        'created_by',
        'updated_by'
    ];
}
