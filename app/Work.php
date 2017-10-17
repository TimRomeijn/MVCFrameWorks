<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Work extends Eloquent
{
    public $timestamps = false;

    protected $fillable = ['workimage', 'worktext', 'style_id'];

}
