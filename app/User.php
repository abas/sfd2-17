<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $guard = [];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'username','phone','generate_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','point'
    ];

    public static function generated_code($username,$password,$email)
    {
        return (string)rand((date("s")),rand(100,200)).substr($email,0,1).substr($username,-2).substr($password,-1);
    }

    public static function isAdmin()
    {
        return Auth::User()->user_type == 'admin';
    }
}
