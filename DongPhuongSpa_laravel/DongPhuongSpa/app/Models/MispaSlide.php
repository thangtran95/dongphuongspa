<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaSlide
 * 
 * @property int $id
 * @property string $image
 * @property string $link
 * @property bool $status
 * @property bool $is_delete
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class MispaSlide extends Eloquent
{
	protected $table = 'mispa_slide';

	protected $casts = [
		'status' => 'bool',
		'is_delete' => 'bool'
	];

	protected $fillable = [
		'image',
		'link',
		'status',
		'is_delete'
	];
}
