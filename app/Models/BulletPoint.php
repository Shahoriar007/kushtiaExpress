<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BulletPoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'points_name',
        'accessories_id',
        'products_id',
    ];
}
