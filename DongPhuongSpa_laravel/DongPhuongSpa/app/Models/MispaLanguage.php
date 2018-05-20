<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaLanguage
 * 
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */
class MispaLanguage extends Eloquent
{
	protected $table = 'mispa_language';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
