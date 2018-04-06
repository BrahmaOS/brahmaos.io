<?php

namespace App\Model\Brahmaos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends Model implements AuthenticatableContract,  AuthorizableContract,  CanResetPasswordContract
{
	//使用auth验证必须继承接口
	use Authenticatable, Authorizable, CanResetPassword;
	//修改为自己的用户表
	protected $table = 'user';
	public $timestamps = false;
	protected $connection = "brahmaos";
	public $primaryKey = 'user_id';

	protected $fillable = ['email', 'password'];

	protected $hidden = ['password', 'remember_token'];
}
