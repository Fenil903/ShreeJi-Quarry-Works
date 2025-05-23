<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'address'];

    public function purchaseOrders()
    {
        return $this->hasMany(ServicePurchaseOrder::class, 'vendor_id');
    }
}
