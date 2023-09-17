<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Photo;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'offer_price',
        'link'

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
