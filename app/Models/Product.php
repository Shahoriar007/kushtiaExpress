<?php

namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'availability',
        'description',
        'bullet_point',
        'category_id',
        'brand_id',
        'is_new',
        'pre_owned',
        'top_featured',

    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function photos(){
        return $this->hasMany(Photo::class, 'products_id', 'id');

    }
}
