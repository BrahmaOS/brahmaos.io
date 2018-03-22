<?php

namespace App\Model\Brahmaos;

use Illuminate\Database\Eloquent\Model;

class CountSource extends Model
{
	protected $table = 'brahma_count_source';
	public $timestamps = false;
	protected $connection = "brahmaos";
	public $primaryKey = 'id';
}
