<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string|null $surname
 * @property string $email
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updaded_at
 * @property int|null $city_id
 * @property string|null $neighborhood
 * @property string|null $street
 * @property string|null $zip_code
 * @property string|null $phone_number
 * @property string $password
 * @property int|null $district_id
 * 
 * @property City|null $city
 * @property District|null $district
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	public $timestamps = false;

	protected $casts = [
		'status' => 'binary',
		'city_id' => 'int',
		'district_id' => 'int'
	];

	protected $dates = [
		'updaded_at'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'surname',
		'email',
		'status',
		'updaded_at',
		'city_id',
		'neighborhood',
		'street',
		'zip_code',
		'phone_number',
		'password',
		'district_id'
	];

	public function city()
	{
		return $this->belongsTo(City::class);
	}

	public function district()
	{
		return $this->belongsTo(District::class, 'district_id', 'district_no');
	}
}
