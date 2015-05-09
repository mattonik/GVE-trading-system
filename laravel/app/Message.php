<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model {

	use SoftDeletes;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'messages';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['to_id', 'from_id', 'message'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	protected $dates = ['deleted_at'];

}
