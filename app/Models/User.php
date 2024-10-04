<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements JWTSubject
{
    use HasRoles;
    use HasApiTokens;
    protected $fillable = ['name', 'email', 'password'];


    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

  
    public function trainer()
    {
        return $this->hasOne(Trainer::class);
    }
}
