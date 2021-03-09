<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

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


    public function shopreg()
    {
        return $this->hasOne('App\ShopReg', 'user_id');
    }
    public function skillset()
    {
        return $this->hasOne('App\SkillSet', 'user_id');
    }
    public function toolset()
    {
        return $this->hasOne('App\ToolSet', 'user_id');
    }

}
