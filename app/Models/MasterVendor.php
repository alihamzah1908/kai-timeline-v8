<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterVendor extends Model
{
    use HasFactory;
    protected $table = 'public.vendor';
    protected $primaryKey = 'vendor_id';
    protected $fillable = [
        'vendor_id',
        'vendor_code',
        'vendor_name',
        'street',
        'country',
        'postal_code',
        'city',
        'account_group',
        'search_term',
        'purch_org',
        'purch_org_descr',
        'order_currency',
        'address',
        'updated_by',
        'created_at',
    ];
}
