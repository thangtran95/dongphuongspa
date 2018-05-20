<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaServiceLanguage
 * 
 * @property int $id
 * @property int $service_id
 * @property string $title
 * @property string $description
 * @property int $language_id
 *
 * @package App\Models
 */
class MispaServiceLanguage extends Eloquent
{
	protected $table = 'mispa_service_language';
	public $timestamps = false;

	protected $casts = [
		'service_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'service_id',
		'title',
		'description',
		'language_id'
	];
}
