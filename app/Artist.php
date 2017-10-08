<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{

    protected $guarded = [];

    public function scopeFeaturedArtist($query)
    {
        //return $query->where('rating', '=>', 3);
    }
}
