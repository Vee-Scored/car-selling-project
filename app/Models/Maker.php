<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Maker extends Model
{
    /** @use HasFactory<\Database\Factories\MakerFactory> */
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    function Car ():HasMany {
        return $this->hasMany(Car::class);
    }

    function CarModel ():HasMany {
        return $this->hasMany(CarModel::class);
    }
}