<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = [
        'city',
        'baths',
        'beds',
        'street',
        'neighborhood',
        'code',
        'area',
        'price',
    ];
}
