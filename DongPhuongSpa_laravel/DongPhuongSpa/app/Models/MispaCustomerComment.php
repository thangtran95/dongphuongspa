<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaCustomerComment
 * 
 * @property int $id
 * @property string $customer_name
 * @property string $description_vi
 * @property string $description_en
 * @property bool $is_delete
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class MispaCustomerComment extends Eloquent
{
	protected $table = 'mispa_customer_comment';

	protected $casts = [
		'is_delete' => 'bool'
	];

	protected $fillable = [
		'customer_name',
		'description_vi',
		'description_en',
		'is_delete'
	];
}
