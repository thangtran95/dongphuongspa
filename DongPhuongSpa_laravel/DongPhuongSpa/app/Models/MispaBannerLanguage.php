<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaBannerLanguage
 * 
 * @property int $id
 * @property int $banner_id
 * @property string $name
 * @property int $language_id
 *
 * @package App\Models
 */
class MispaBannerLanguage extends Eloquent
{
	protected $table = 'mispa_banner_language';
	public $timestamps = false;

	protected $casts = [
		'banner_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'banner_id',
		'name',
		'language_id'
	];
}
