<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	/**
	 * Allow table columns to be mass assigned
	 *
	 * @var array
	 */
	protected $fillable = [
		'name'
	];

	/**
	 * Clients have many tickets
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function tickets(){
		return $this->hasMany('App\Ticket');
	}

	/**
	 * Clients have many Users
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function users(){
		return $this->hasMany('App\User');
	}

	/**
	 * Clients have many Websites
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function websites(){
		return $this->hasMany('App\Website');
	}

}
