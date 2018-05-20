<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaContact
 * 
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $service
 * @property string $message
 * @property bool $is_delete
 * @property bool $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class MispaContact extends Eloquent
{
	protected $table = 'mispa_contact';

	protected $casts = [
		'is_delete' => 'bool',
		'status' => 'bool'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'service',
		'message',
		'is_delete',
		'status'
	];
}
