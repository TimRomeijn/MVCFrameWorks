<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Work extends Eloquent
{
    public $timestamps = false;

    protected $fillable = ['workimage', 'worktext', 'style_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
