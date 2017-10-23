<?php
namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{

    protected $guarded = [];

    protected $fillable = ['style_id', 'user_id', 'work_id'];

}
