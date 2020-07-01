<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use APP\User;
use APP\Skill;
use APP\Level;

class Level_Skill_User extends Model
{
    //
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function skills(){
        return $this->belongsTo(Skill::class);
    }
    public function levels(){
        return $this->belongsTo(Level::class);
    }
}
