<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaTeam
 * 
 * @property int $id
 * @property string $name
 * @property string $image
 * @property int $sort_order
 * @property bool $is_delete
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class MispaTeam extends Eloquent
{
	protected $table = 'mispa_team';

	protected $casts = [
		'sort_order' => 'int',
		'is_delete' => 'bool'
	];

	protected $fillable = [
		'name',
		'image',
		'sort_order',
		'is_delete'
	];
}
