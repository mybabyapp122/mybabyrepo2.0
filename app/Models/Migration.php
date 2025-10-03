<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Migration extends Model
{
    use HasFactory;

    protected $table = 'migration';
    protected $primaryKey = 'version';
    protected $keyType = 'string';

    protected $fillable = [
        'version',
        'apply_time',
    ];
}
