<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaNews
 * 
 * @property int $id
 * @property string $image
 * @property string $image_thumbnail
 * @property bool $is_featured
 * @property bool $is_delete
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class MispaNews extends Eloquent
{
	protected $casts = [
		'is_featured' => 'bool',
		'is_delete' => 'bool'
	];

	protected $fillable = [
		'image',
		'image_thumbnail',
		'is_featured',
		'is_delete'
	];
}
