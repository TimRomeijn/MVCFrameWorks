<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{

    public function scopeFeaturedArtist($query)
    {
        //return $query->where('rating', '=>', 3);
    }
}
