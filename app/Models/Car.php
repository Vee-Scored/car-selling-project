<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    /** @use HasFactory<\Database\Factories\CarFactory> */
    use HasFactory;

    protected $fillable = [
        'maker_id',
        'model_id',
        'year',
        'price',
        'vin',
        'mileage',
        'car_type_id',
        'fuel_type_id',
        'user_id',
        'city_id',
        'address',
        'phone',
        'description',
        'published_at',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    function Maker ():BelongsTo {
        return $this->belongsTo(Maker::class);
     }

     function CarType ():BelongsTo {
        return $this->BelongsTo(CarType::class);
     }

     function FuelType ():BelongsTo {
        return $this->BelongsTo(FuelType::class);
     }

     function CarModels ():BelongsTo {
        return $this->BelongsTo(CarModel::class,'model_id','id');
     }

     function User ():BelongsTo {
        return $this->belongsTo(User::class);
     }

     function FavouredUsers () : BelongsToMany {
        return $this->belongsToMany(User::class,'favourite_cars');
     }

     function CarFeature () :HasOne {
        return $this->hasOne(CarFeature::class);
     }

     function CarImage () : HasMany {
        return $this->hasMany(CarImage::class);
     }
     function primaryImage () : hasOne {
      return $this->hasOne(CarImage::class);
     }

     function City () : BelongsTo {
      return $this->belongsTo(City::class);
     }
}
