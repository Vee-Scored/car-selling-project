<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarType extends Model
{
    /** @use HasFactory<\Database\Factories\CarTypeFactory> */
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public $timestamps = false;
    function Car () : HasMany {
        return $this->hasMany(Car::class);
    }
}
