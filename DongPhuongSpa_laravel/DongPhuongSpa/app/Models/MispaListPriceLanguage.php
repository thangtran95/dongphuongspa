<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaListPriceLanguage
 * 
 * @property int $id
 * @property int $list_price_id
 * @property string $name
 * @property string $description
 * @property int $language_id
 *
 * @package App\Models
 */
class MispaListPriceLanguage extends Eloquent
{
	protected $table = 'mispa_list_price_language';
	public $timestamps = false;

	protected $casts = [
		'list_price_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'list_price_id',
		'name',
		'description',
		'language_id'
	];
}
