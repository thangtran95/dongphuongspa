<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaWorkTimeLanguage
 * 
 * @property int $id
 * @property string $work_time_id
 * @property string $name
 * @property string $time
 * @property int $language_id
 *
 * @package App\Models
 */
class MispaWorkTimeLanguage extends Eloquent
{
	protected $table = 'mispa_work_time_language';
	public $timestamps = false;

	protected $casts = [
		'language_id' => 'int'
	];

	protected $fillable = [
		'work_time_id',
		'name',
		'time',
		'language_id'
	];
}
