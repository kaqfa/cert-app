<?php

class Graduation extends Eloquent{
	public function students(){
		return $this->hasMany('Student');
	}
}