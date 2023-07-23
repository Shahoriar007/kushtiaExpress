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
    ];
}
