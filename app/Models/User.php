<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 03 Nov 2017 18:03:53 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $user
 * @property int $edad
 *
 * @package App\Models
 */
class User extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'edad' => 'int'
	];

	protected $fillable = [
		'user',
		'edad'
	];
}
