<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    use HasFactory;

    public function roles(){

        return $this->belongsToMany('App\Models\Role', 'user_role', 'user_id', 'role_id');

    }

    public function hasAnyRole($roles){
        
        if (is_array($roles)){
            foreach($roles as $role){
                if($this->hasRole($role)){
                   return true;
                }
            }
        }else{
            if($this->hasRole($roles)){
                return true;
            }
        }
        return false;       
    }

    public function hasRole($role){

        if($this->roles()->where('name', $role)->first()){
            return true;
        }
        return false;
    }

}