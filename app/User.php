<?php

namespace App;

use App\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

	// public function hasRole()
	// {
	// 	return $this->belongsTo(Role::class);
    // }
    public function role()
    {
      return $this->hasOne('App\Role', 'id', 'role_id');
    }


    public function hasRole($roles)
    {
        if (is_array($roles)) {

            foreach($roles as $need_role) {

                if($this->checkIfUserHasRole($need_role)) {

                    return true;
                }
            }

        } else {

            return $this->checkIfUserHasRole($roles);
        }

        return false;
    }


    private function checkIfUserHasRole($need_role)
    {
        return (strtolower($need_role) == strtolower($this->role->name)) ? true : null;
    }


    public static function manageStatus($roleid, $previous, $updated)
    {
        if(\Auth::user()->role_id == 2){

            if($roleid == 3){

                $status = $updated;

            }else{

                $status = $previous;
            }

        } else {

            $status = $updated;
        }

        return $status;
    }
}
