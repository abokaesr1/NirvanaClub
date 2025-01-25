<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Readytojoin extends Model
{
    use HasFactory;
    protected $casts =
    [
        'slider' => 'array',
     ];
}
