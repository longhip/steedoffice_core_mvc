<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Monster Admin
 * Author: tuanda@steed.vn
 */

class City extends Model {

	const STATUS_DEACTIVE = 0;
	const STATUS_ACTIVE = 1;

	protected $table = 'city';
	protected $primaryKey = 'id';

	protected $fillable = ['name', 'active'];

	public $timestamps = false;
	public static $rules = [
		'name' => 'required|max:250',
	];

}