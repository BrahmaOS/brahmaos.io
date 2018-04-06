<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;

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
