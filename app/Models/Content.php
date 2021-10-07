<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sinopse',
        'urlLogo',
        'urlBackground',
        'urlThumbVertical',
        'urlThumbHorizontal',
        'urlTrailer',
        'year',
        'maturityRating',
    ];

}
