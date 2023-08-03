<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public $fillable = [
        'brandName'
    ];

    public function photo()
    {
        return $this->belongsTo(Photo::class, 'photo_id', 'id');
    }

}
