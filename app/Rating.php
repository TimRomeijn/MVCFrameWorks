<?php

namespace App;



class Rating extends Model
{
    protected $fillable = ['workimage', 'rating','worktext', 'style_id', 'user_id', 'work_id'];

    //Rating belongs to a work
   public function work()
   {
       return $this->belongsTo(Work::class);
   }

    //Rating belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
