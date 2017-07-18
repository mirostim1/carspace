<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $directory = '/images/';

    protected $fillable = [
        'path'
    ];

    public function getPathAttribute($value) {
        return $this->directory . $value;
    }
}
