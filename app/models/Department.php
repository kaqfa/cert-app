<?php

class Department extends Eloquent{
	public function courses(){
		return $this->hasMany('Course');
	}
}