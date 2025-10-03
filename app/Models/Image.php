<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $fillable = [
        'model',
        'model_id',
        'category',
        'filename',
        'image_src',
        'thumb_src',
        'description',
    ];
}

