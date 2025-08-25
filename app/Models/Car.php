<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

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
        'published_at'
    ];

    // =============================================
    // BelongsTo relationships
    // =============================================

    public function carType(): BelongsTo
    {
        return $this->belongsTo(CarType::class);
    }

    public function maker(): BelongsTo
    {
        return $this->belongsTo(Maker::class);
    }

    public function model(): BelongsTo
    {
        return $this->belongsTo(Model::class);
    }

    public function fuelType(): BelongsTo
    {
        return $this->belongsTo(FuelType::class);
    }

    //Added a foreign key cause we need to track the owner of the car
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    // =============================================
    // End of BelongsTo relationships
    // =============================================


    // =============================================
    // HasOne relationships
    // =============================================
    
    public function features():HasOne
    {
        return $this->hasOne(CarFeatures::class);
    }

    public function primaryImage():HasOne
    {
        return $this->hasOne(CarImage::class)
            ->oldestOfMany('position');
    }

    // =============================================
    // End of HasOne relationships
    // =============================================
    

    public function images(): HasMany
    {
        return $this->hasMany(CarImage::class);
    }

    public function favouredUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favourite_cars');
    }
}
