<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaProduct
 * 
 * @property int $id
 * @property string $image
 * @property string $image_thumbnail
 * @property bool $is_sale
 * @property bool $is_new
 * @property bool $is_selling
 * @property bool $is_delete
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class MispaProduct extends Eloquent
{
	protected $table = 'mispa_product';

	protected $casts = [
		'is_sale' => 'bool',
		'is_new' => 'bool',
		'is_selling' => 'bool',
		'is_delete' => 'bool'
	];

	protected $fillable = [
		'image',
		'image_thumbnail',
		'is_sale',
		'is_new',
		'is_selling',
		'is_delete'
	];
}
