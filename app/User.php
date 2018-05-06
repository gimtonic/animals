<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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

    // Email
    public function setEmailAttribute($value){
        if(empty($value)){
            $faker = \Faker\Factory::create();
            $this->attributes['email'] = $faker->unique()->safeEmail;
        }else{
            $this->attributes['email'] = $value;
        }
    }

// Password hashing
    public function setPasswordAttribute($value){
        if(empty($value)){
            $this->attributes['password'] = \Hash::make('123456');
        }
    }

    public function animal()
    {
        return $this->hasOne('App\Animal');
    }



}
