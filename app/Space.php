<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Space extends Model
{

    protected $fillable = ['spaces', 'free', 'taken'];

}
