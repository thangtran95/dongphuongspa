<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaUser
 * 
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $avatar
 * @property string $address
 * @property bool $is_delete
 * @property int $role
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class MispaUser extends Eloquent
{
	protected $table = 'mispa_user';

	protected $casts = [
		'is_delete' => 'bool',
		'role' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'email',
		'password',
		'phone',
		'avatar',
		'address',
		'is_delete',
		'role'
	];
}
