<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Todo_index;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','finished'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function index()
    {
       return $this->hasMany(Todo_index::class,'todo_owner');
       //data yang mo dicari todo_owner
       //https://laravel.com/docs/5.7/eloquent-relationships#one-to-many
    }

    //$User::find(1)->index
    //$User=new App\User()




    ///
    // $user = new App\User();
    // $user->password = Hash::make('the-password-of-choice');
    // $user->email = 'the-email@example.com';
    // $user->save();
    
    //
    // >> $get_index=new App\User
    // => App\User {#2916}
    // >>> $get_index::find(1)
    // => App\User {#2920
    //      id: 1,
    //      name: "aqwd",
    //      email: "the-email@example.com",
    //      created_at: "2018-12-20 16:53:10",
    //      updated_at: "2018-12-20 16:53:10",
    //    }
    // >>> $get_index::find(1)->index

}
