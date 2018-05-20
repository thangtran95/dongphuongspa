<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaSubscribe
 * 
 * @property int $id
 * @property string $email
 * @property bool $is_delete
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class MispaSubscribe extends Eloquent
{
	protected $table = 'mispa_subscribe';

	protected $casts = [
		'is_delete' => 'bool'
	];

	protected $fillable = [
		'email',
		'is_delete'
	];
}
