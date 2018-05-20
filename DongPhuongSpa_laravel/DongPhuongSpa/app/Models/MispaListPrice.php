<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaListPrice
 * 
 * @property int $id
 * @property float $price
 * @property bool $is_new
 * @property string $time
 * @property bool $is_delete
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class MispaListPrice extends Eloquent
{
	protected $table = 'mispa_list_price';

	protected $casts = [
		'price' => 'float',
		'is_new' => 'bool',
		'is_delete' => 'bool'
	];

	protected $fillable = [
		'price',
		'is_new',
		'time',
		'is_delete'
	];
}
