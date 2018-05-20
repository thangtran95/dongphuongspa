<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaSocial
 * 
 * @property int $id
 * @property string $name_vi
 * @property string $name_en
 * @property string $icon
 * @property string $link
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class MispaSocial extends Eloquent
{
	protected $table = 'mispa_social';

	protected $fillable = [
		'name_vi',
		'name_en',
		'icon',
		'link'
	];
}
