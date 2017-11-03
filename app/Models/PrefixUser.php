<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 03 Nov 2017 18:03:53 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PrefixUser
 * 
 * @property int $id
 * @property string $user_name
 * @property string $user_pass
 * @property \Carbon\Carbon $user_date_register
 *
 * @package App\Models
 */
class PrefixUser extends Eloquent
{
	protected $table = 'prefix_user';
	public $timestamps = false;

	protected $dates = [
		'user_date_register'
	];

	protected $fillable = [
		'user_name',
		'user_pass',
		'user_date_register'
	];
}
