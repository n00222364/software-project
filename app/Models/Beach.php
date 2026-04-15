<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beach extends Model
{
    protected $fillable = [

        // these are the fields that can be created/updated
        'name',
        'description',
        'longitude',
        'latitude',
        'quality_results'
    ];

    // check which user saved a beach
    public function favouritedBy()
{
    // a beach can be favourited by many users
    return $this->belongsToMany(User::class, 'favourites');
}
}
