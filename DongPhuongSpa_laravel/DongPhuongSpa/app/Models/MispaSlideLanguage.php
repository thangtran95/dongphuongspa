<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaSlideLanguage
 * 
 * @property int $id
 * @property int $slide_id
 * @property string $name
 * @property int $language_id
 *
 * @package App\Models
 */
class MispaSlideLanguage extends Eloquent
{
	protected $table = 'mispa_slide_language';
	public $timestamps = false;

	protected $casts = [
		'slide_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'slide_id',
		'name',
		'language_id'
	];
}
