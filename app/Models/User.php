<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class User extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	*/
	protected $fillable = [
	  'name',
	  'email',
	  'username',
	  'password',
	];
	
	/**
	 * Always encrypt the password when it is updated.
	 *
	  * @param $value
	 * @return string
	 */
	public function setPasswordAttribute($value)
	{
	   $this->attributes['password'] = bcrypt($value);
	}
}
