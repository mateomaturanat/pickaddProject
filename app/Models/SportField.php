<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportField extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'country',
        'cellphone',
        'hour_price',
        'court_type',
        'horary',
        'week',
        'type',
        'amount',
        'trafo',
        'description',
        'image_url',
        'lat',
        'long',
    ];
}
