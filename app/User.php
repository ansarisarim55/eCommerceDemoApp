<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
Use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
  public function cart()
  {
      return $this->hasOne('App\Cart');
  }
  public function order()
  {
      return $this->hasOne('App\Order');
  }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}
