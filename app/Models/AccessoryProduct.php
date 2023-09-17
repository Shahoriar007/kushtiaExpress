<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessoryProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'availability',
        'description',
        'bullet_point',
        'offer_price',
        'link'
    ];

    public function photos(){
        return $this->hasMany(Photo::class, 'accessory_products_id', 'id');

    }
}
