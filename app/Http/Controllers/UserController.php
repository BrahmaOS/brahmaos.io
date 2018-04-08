<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
	/**
	 * 处理身份认证尝试
	 * @param Request $request
	 * @return $this|array|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function authenticate(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'email' => 'required|exists:brahmaos.user,email',
			'password' => 'required',
		]);

		if ($validator->fails()) {
			return ['code'=>400, 'msg'=>'email not found!', 'data'=>[]];
		}
		$email = $request->input('email');
		$password = $request->input('password');
		$remember = $request->input('remember');

		if (Auth::attempt(['email' => $email, 'password' => $password, 'is_active'=>1], $remember)) {
			// 这个用户被记住了...
			$user = Auth::user();

			$user->ip = $request->getClientIp();
			$user->login_at = date('Y-m-d H:i:s');
			$user->save();

			// set remember me expire time 7 days
			$rememberTokenExpireMinutes = 604800;

			// first we need to get the "remember me" cookie's key, this key is generate by laravel randomly
			// it looks like: remember_web_59ba36addc2b2f9401580f014c7f58ea4e30989d
			$rememberTokenName = Auth::getRecallerName();

			// reset that cookie's expire time
			Cookie::queue($rememberTokenName, Cookie::get($rememberTokenName), $rememberTokenExpireMinutes);

			return ['code'=>0, 'msg'=>'success', 'data'=>['location'=>url('/members-details.html')]];
		} else {
			return ['code'=>400, 'msg'=>'email or password error', 'data'=>[]];
		}
	}

	public function encrypt(Request $request)
	{
		$password = $request->input('password', 123456);
		$secret = bcrypt($password);

		return $secret;
	}
}
