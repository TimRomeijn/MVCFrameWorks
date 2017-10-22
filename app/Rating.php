<?php

namespace App;



class Rating extends Model
{
    protected $fillable = ['workimage', 'worktext', 'style_id', 'user_id', 'work_id'];

   public function work()
   {
       return $this->belongsTo(Work::class);
   }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
