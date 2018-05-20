<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaBanner
 * 
 * @property int $id
 * @property string $name_vi
 * @property string $name_en
 * @property string $image
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class MispaBanner extends Eloquent
{
	protected $table = 'mispa_banner';

	protected $fillable = [
		'name_vi',
		'name_en',
		'image'
	];
}
