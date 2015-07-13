<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function isAdmin()
    {
        return true;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function assignRole($role)
    {
        return $this->roles()->attach($role);
    }

    public function revokeRole($role)
    {
        return $this->roles()->detach($role);
    }

    public function isAn($roleName)
    {
        return $this->isA($roleName);
    }

    public function isA($roleName)
    {
        foreach ($this->roles()->get() as $role)
        {
            if ($role->name == $roleName)
            {
                return true;
            }
        }

        return false;
    }

    public function isVerified()
    {
        if ($this->verified_on && $this->verified_on <= Carbon::now()) {
            return true;
        } else {
            return false;
        }
    }

    public function isActive()
    {
        if ($this->active_on && $this->active_on <= Carbon::now()) {
            return true;
        } else {
            return false;
        }
    }

    public function isBlocked()
    {
        if ( $this->blocked_on && Carbon::now() >= $this->blocked_on ) {
            return true;
        } else {
            return false;
        }
    }
}
