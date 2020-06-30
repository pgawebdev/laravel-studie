<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use APP\User;

class Skill extends Model
{
    //
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
