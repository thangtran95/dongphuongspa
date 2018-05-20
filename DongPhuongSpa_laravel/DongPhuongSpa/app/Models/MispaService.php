<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaService
 * 
 * @property int $id
 * @property int $sevice_type_id
 * @property string $image
 * @property bool $is_delete
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class MispaService extends Eloquent
{
	protected $table = 'mispa_service';

	protected $casts = [
		'sevice_type_id' => 'int',
		'is_delete' => 'bool'
	];

	protected $fillable = [
		'sevice_type_id',
		'image',
		'is_delete'
	];
}
