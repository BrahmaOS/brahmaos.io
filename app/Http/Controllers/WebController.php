<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class WebController extends Controller
{
    public function index()
    {
	    $allow = Auth::check() && Auth::user()->is_active;
	    return view('site2.index', ['allow'=>$allow]);
    }

    public function abstract_1()
    {
	    return view('site2.abstract1');
    }

    public function abstract_2()
    {
	    return view('site2.abstract2');
    }

    public function abstract_3()
    {
	    return view('site2.abstract3');
    }

    public function members_details()
    {
	    return view('site2.Members-details');
    }

    public function index_zh()
    {
        return view('site2.index_zh');
    }

    public function abstract_zh_1()
    {
        return view('site2.abstract1zh');
    }

    public function abstract_zh_2()
    {
        return view('site2.abstract2zh');
    }

    public function abstract_zh_3()
    {
        return view('site2.abstract3zh');
    }
}
