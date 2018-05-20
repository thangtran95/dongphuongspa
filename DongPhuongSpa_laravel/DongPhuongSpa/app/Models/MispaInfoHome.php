<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaInfoHome
 * 
 * @property int $id
 * @property string $name_vi
 * @property string $name_en
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class MispaInfoHome extends Eloquent
{
	protected $table = 'mispa_info_home';

	protected $fillable = [
		'name_vi',
		'name_en'
	];
}
