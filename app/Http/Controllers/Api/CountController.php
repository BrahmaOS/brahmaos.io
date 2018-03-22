<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Brahmaos\CountDay;
use App\Model\Brahmaos\CountUtm;
use App\Model\Brahmaos\CountSource;


class CountController extends Controller
{
	/**
	 * @param Request $request
	 * @return redirect
	 */
	public function countUtmSource(Request $request)
	{
		# ip地址:
		$params['ip'] = $request->getClientIp();
		$params['utm_source'] = $request->input('utm_source', '');

		# 验证是否存在source
		$source =  CountSource::where('utm_source', $params['utm_source'])->first();
		if (!$source){
			return response('who are you?', 500);
		}

		app(CountUtm::class)->__add__($params);
		return redirect($source->redirct_url, 302);
	}

	public function countUtmSourceDay(Request $request)
	{
		$date = $request->input('date', date('Y-m-d', strtotime('-1 day')));
		$sources = CountSource::get();
		foreach ($sources as $source){
			$CountDay = CountDay::where(['date'=>$date, 'utm_source'=>$source->utm_source])->first();

			if ($CountDay){
				$CountDay->ip = CountUtm::where('utm_source', $source->utm_source)->whereDate('created_at',$date)->distinct()->count('ip');
				$CountDay->pv = CountUtm::where('utm_source', $source->utm_source)->whereDate('created_at',$date)->count('id');

				$CountDay->save();
			} else {
				$data['ip'] = CountUtm::where('utm_source', $source->utm_source)->whereDate('created_at',$date)->distinct()->count('ip');
				$data['pv'] = CountUtm::where('utm_source', $source->utm_source)->whereDate('created_at',$date)->count('id');
				$data['date'] = $date;
				$data['utm_source'] = $source->utm_source;

				return CountDay::insertGetId($data);
			}
		}
		return ['code'=>200, 'msg'=>'success'];
	}

	public function sortArray($arr)
	{
		$v = "asefwefaas";
		$str = str_split($v);
		$arr = array_count_values($arr);
		arsort($arr);

	}

}
