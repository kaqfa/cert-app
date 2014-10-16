<?php
class Student extends Eloquent{
	public function certificate(){
		return $this->hasOne('Certificate', 'student_nim', 'nim');
	}

	public function transcripts(){
		return $this->hasMany('Transcript');
	}

	public function graduation(){
		return $this->belongsTo('Graduation');
	}

	public function legalizations(){
		return $this->hasMany('Legalization');
	}

	public function getStudentTranscript($where = null, $valWhere = null){
		$query = DB::table('students')
						->join('certificates', 'students.nim', '=', 'certificates.student_nim');
		if($where != null){
			$query = $query->where($where, $valWhere);
		}

		return $query->get();
	}

	public function getTranscript($nim){
		$query = DB::table('transcripts')->where('student_nim', $nim)
								->join('courses', 'courses.code', '=', 'transcripts.course_code')
								->groupBy('course_code')->orderBy('grade');
		return $query->get();
	}
}