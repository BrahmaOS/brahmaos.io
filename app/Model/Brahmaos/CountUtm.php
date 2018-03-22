<?php

namespace App\Model\Brahmaos;

use Illuminate\Database\Eloquent\Model;

class CountUtm extends Model
{
	protected $table = 'brahma_count_utm';
	public $timestamps = false;
	protected $connection = "brahmaos";
	public $primaryKey = 'id';


	public function __add__($params)
	{
		$data['ip'] = array_get($params, 'ip');
		$data['utm_source'] = array_get($params,'utm_source');
		$data['created_at'] = date('Y-m-d H:i:s');

		return self::insertGetId($data);
	}
}
