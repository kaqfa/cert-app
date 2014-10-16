<?php

class Course extends Eloquent{
	public function transcripts(){
		return $this->hasMany('Transcript');
	}

	public function department(){
		return $this->belongsTo('Department');
	}
}