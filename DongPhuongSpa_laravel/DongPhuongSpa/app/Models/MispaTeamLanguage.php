<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaTeamLanguage
 * 
 * @property int $id
 * @property int $team_id
 * @property string $role
 * @property string $description
 * @property int $language_id
 *
 * @package App\Models
 */
class MispaTeamLanguage extends Eloquent
{
	protected $table = 'mispa_team_language';
	public $timestamps = false;

	protected $casts = [
		'team_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'team_id',
		'role',
		'description',
		'language_id'
	];
}
