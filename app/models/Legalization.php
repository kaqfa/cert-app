<?php

class Legalization extends Eloquent{
	var $status = array('Invalid', 
				array('text'=>'Otentik', 'class'=>'label label-success', 
							'desc'=>'File Ijazah mahasiswa tersebut valid sesuai dengan aslinya.'), 
				'Tidak Terdaftar', 
				'Pending');

	public function student(){
		return $this->belongsTo('Student');
	}

	public function uploader(){
		return $this->belongsTo('User');
	}

	public function getStatus($statusCode){
		return $this->status[$statusCode];
	}
}