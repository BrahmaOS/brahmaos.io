<?php

namespace App\Model\Brahmaos;

use Illuminate\Database\Eloquent\Model;

class CountDay extends Model
{
	protected $table = 'brahma_count_day';
	public $timestamps = false;
	protected $connection = "brahmaos";
	public $primaryKey = 'id';
}
