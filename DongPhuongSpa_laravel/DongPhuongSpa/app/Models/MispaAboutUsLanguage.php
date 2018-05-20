<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaAboutUsLanguage
 * 
 * @property int $id
 * @property int $about_us_id
 * @property string $name
 * @property string $description
 * @property string $info
 * @property int $language_id
 *
 * @package App\Models
 */
class MispaAboutUsLanguage extends Eloquent
{
	protected $table = 'mispa_about_us_language';
	public $timestamps = false;

	protected $casts = [
		'about_us_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'about_us_id',
		'name',
		'description',
		'info',
		'language_id'
	];
}
