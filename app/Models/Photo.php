<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public function accessory(){
        return $this->belongsTo(AccessoryProduct::class, 'accessory_products_id', 'id');
    }
    public function product(){
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
    
}
