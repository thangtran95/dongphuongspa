<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaReport
 * 
 * @property int $id
 * @property string $name_vi
 * @property string $name_en
 * @property int $number
 * @property int $sort_order
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class MispaReport extends Eloquent
{
	protected $table = 'mispa_report';

	protected $casts = [
		'number' => 'int',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'name_vi',
		'name_en',
		'number',
		'sort_order'
	];
}
