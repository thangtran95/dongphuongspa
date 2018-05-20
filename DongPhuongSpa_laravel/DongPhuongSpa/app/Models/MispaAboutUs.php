<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaAboutUs
 * 
 * @property int $id
 * @property string $image
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class MispaAboutUs extends Eloquent
{
	protected $table = 'mispa_about_us';

	protected $fillable = [
		'image'
	];
}
