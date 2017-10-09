<?php

namespace App;



class Artist extends Model
{



    public $timestamps = false;

    public function scopeFeaturedArtist($query)
    {
        //return $query->where('rating', '=>', 3);
    }
}
