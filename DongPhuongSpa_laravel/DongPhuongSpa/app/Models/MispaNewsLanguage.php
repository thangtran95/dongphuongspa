<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jan 2018 02:18:34 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MispaNewsLanguage
 * 
 * @property int $id
 * @property int $news_id
 * @property string $title
 * @property string $description
 * @property int $language_id
 *
 * @package App\Models
 */
class MispaNewsLanguage extends Eloquent
{
	protected $table = 'mispa_news_language';
	public $timestamps = false;

	protected $casts = [
		'news_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'news_id',
		'title',
		'description',
		'language_id'
	];
}
