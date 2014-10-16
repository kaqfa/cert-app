<?php

class Transcript extends Eloquent{
	public function course(){
		$this->belongsTo('Course');
	}

	public function student(){
		$this->belongsTo('Student');
	}
}