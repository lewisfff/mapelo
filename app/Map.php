<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'cached_elo',
    ];

    public static function randomMaps($count = 2)
    {
        return Map::inRandomOrder()
            ->take($count)
            ->pluck('name');
    }

}
