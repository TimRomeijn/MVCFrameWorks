<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Http\Request;

class Work extends Eloquent
{
    public $timestamps = false;

    protected $fillable = ['workimage', 'worktext', 'style_id', 'user_id'];

    //A work belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //A work can have many ratings
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    //Can be searched on name of work
    public function scopeSearch($query, $search)
    {
        return $query->where('worktext', 'like', '%' .$search. '%');
    }



}
