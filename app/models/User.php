<?php 
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface {

	use UserTrait, RemindableTrait;
	var $levelChoice = array('A'=>'Administrator', 'S'=>'Mahasiswa', 'I'=>'Instansi');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	public function legalizations(){
		$this->hasMany('Legalization');
	}

	public function getFullName()
	{
		return $this->firstname . ' ' . $this->lastname;
	}

	public function getLevel($levelKode){
		return $this->levelChoice[$levelKode];
	}
}