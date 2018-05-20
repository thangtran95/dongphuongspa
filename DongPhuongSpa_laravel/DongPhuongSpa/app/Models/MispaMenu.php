<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaMenu
 * 
 * @property int $id
 * @property string $name_vi
 * @property string $name_en
 * @property int $parent_id
 * @property bool $is_sub
 * @property int $sort_order
 * @property string $link
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class MispaMenu extends Eloquent
{
	protected $table = 'mispa_menu';

	protected $casts = [
		'parent_id' => 'int',
		'is_sub' => 'bool',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'name_vi',
		'name_en',
		'parent_id',
		'is_sub',
		'sort_order',
		'link'
	];
}
