<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'map_harder_id',
        'map_easier_id',
    ];

}
