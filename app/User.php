<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'role_id', 'is_active', 'photo_id', 'password'
    ];

    protected $hidden = [
        'remember_token'
    ];

    public function role() {
        return $this->belongsTo('App\Role');
    }

    public function photo() {
        return $this->belongsTo('App\Photo');
    }

    public function isAdmin() {

        if($this->role->name == 'Administrator') {
            return true;
        }

        return false;
    }
}
