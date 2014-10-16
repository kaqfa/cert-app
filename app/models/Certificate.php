<?php

class Certificate extends Eloquent{
	public function student(){
		$this->belongsTo('Student', 'student_nim', 'nim');
	}
}