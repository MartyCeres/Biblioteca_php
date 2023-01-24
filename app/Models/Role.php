<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;
    public function users(){

        return $this->belongsToMany('App\Models\User', 'user_role', 'role_id', 'user_id');

    }
}
