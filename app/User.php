<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const ROLE_CUSTOMER = '1';

    const ROLE_ADMIN = '7';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','genre','age','weight','height', 'email', 'password','avatar','role',
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

    public function goals() {
      return $this->belongsTo('App\Goal','goal_id');
    }
    public function training_sessions(){
      return $this->belongsTo('App\Training_Session','training_session_id');
    }

    public function delete()
    {
      if ($this->id == self::ROLE_ADMIN) {
        return false;
      }

      return parent::delete();
    }
}
