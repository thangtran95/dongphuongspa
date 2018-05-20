<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaProductLanguage
 * 
 * @property int $id
 * @property int $product_id
 * @property string $name
 * @property string $description
 * @property string $info
 * @property int $language_id
 *
 * @package App\Models
 */
class MispaProductLanguage extends Eloquent
{
	protected $table = 'mispa_product_language';
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'product_id',
		'name',
		'description',
		'info',
		'language_id'
	];
}
