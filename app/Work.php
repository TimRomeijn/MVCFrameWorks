<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Http\Request;

class Work extends Eloquent
{
    public $timestamps = false;

    protected $fillable = ['workimage', 'worktext', 'style_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('worktext', 'like', '%' .$search. '%');
    }



}
