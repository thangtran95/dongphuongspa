<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaPromotionLanguage
 * 
 * @property int $id
 * @property int $promotion_id
 * @property string $title
 * @property string $description
 * @property int $language_id
 *
 * @package App\Models
 */
class MispaPromotionLanguage extends Eloquent
{
	protected $table = 'mispa_promotion_language';
	public $timestamps = false;

	protected $casts = [
		'promotion_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'promotion_id',
		'title',
		'description',
		'language_id'
	];
}
