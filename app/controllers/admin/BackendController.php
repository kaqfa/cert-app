<?php

Class BackendController extends BaseController{
	
	protected $layout = "admin.layouts.empty";

	function __construct(){
		$this->beforeFilter('login');
	}

	public function index(){
		$user = Auth::getUser();		
		$this->layout->content = "<h1>Selamat datang</h1>".$user->getFullName();
	}

	public function uploadIjazah(){
		$legals = Legalization::where('user_id', Auth::getUser()->id);
		$this->layout->content = View::make('admin.backend.upload_ijazah', array('legals'=>$legals));
	}

	public function postUploadIjazah(){
		//$rules = array( 'certificate_file' => 'mimes:jpeg,bmp,png' );

		$input = array();
		$input['student_id']  = DB::table('students')->where('nim', Input::get('nim'))->pluck('id');
		$input['uploaded_at']  = date('Y-m-d H:i:s');
		$input['status']  = '3';
		$input['uploader_ip'] = Request::getClientIp();
		$input['user_id'] = Auth::getUser()->id;

		if(Input::hasFile('certificate_file')){
			$cert = Input::file('certificate_file');
			$input['certificate_file'] = 'cert_'.$input['student_id'].'_'.date('m-d_H:i:s').'.'.$cert->getClientOriginalExtension();
			$cert->move('public/uploads', $input['certificate_file']);
		}
		if(Input::hasFile('transcript1_file')){
			$trans1 = Input::file('transcript1_file');			
			$input['transcript1_file'] = 'trans1_'.$input['student_id'].'_'.date('m-d_H:i:s').'.'.$trans1->getClientOriginalExtension();
			$trans1->move('public/uploads', $input['transcript1_file']);
			// $rules['transcript1_file'] = 'mimes:jpeg,bmp,png';
		}
		if(Input::hasFile('transcript2_file')){
			$trans2 = Input::file('transcript2_file');			
			$input['transcript2_file'] = 'trans2_'.$input['student_id'].'_'.date('m-d_H:i:s').'.'.$trans2->getClientOriginalExtension();
			$trans2->move('public/uploads', $input['transcript2_file']);
			// $rules['transcript2_file'] = 'mimes:jpeg,bmp,png';
		}

		// $valid = Validator::make($input, $rules);
		// if($valid->passes()){
			DB::table('legalizations')->insert($input);	
			$this->uploadIjazah();
		// } else {
		// 	return $valid->messages();
		// }

		
	}

	public function downloadIjazah(){
		$this->layout->content = View::make('admin.backend.download_ijazah');
	}

	public function scanQRCode(){
		$this->layout->content = View::make('admin.backend.scan_ijazah');
	}

	public function lulusanWisuda(){
		$grads = Graduation::all();
		$this->layout->content = View::make('admin.backend.grads', array('grads'=>$grads));
	}

	public function lulusanDetail($by = 'wisuda', $val){
		$students = new Student();
		$title = null;
		if($by == 'wisuda'){
			$students = $students->getStudentTranscript('graduation_id', $val);
			// print_r(DB::getQueryLog());
			$title = 'Pada Periode Wisuda Ke '.$val;
		} else {
			//$students = Student::where('substring(nim from 1 for 3)', $val);	
			$title = 'Pada Periode Wisuda Ke '.$val;
		}
		
		$this->layout->content = View::make('admin.backend.grads_detail', array('students'=>$students, 'title'=>$title));
	}

	public function studentDetail($nim){
		$student = new Student();
		$transcripts = $student->getTranscript($nim);
		$student = $student->getStudentTranscript('nim', $nim);

		$this->layout->content = View::make('admin.backend.student_detail', 
											array('student'=>$student, 'transcripts'=>$transcripts));	
	}

	public function lulusanFakultas(){
		$this->layout->content = View::make('admin.backend.upload_ijazah');
	}

	public function changePassword(){
		$this->layout->content = View::make('admin.backend.upload_ijazah');
	}

	public function changeProfile($userId = 0){
		$user = null;
		if($userId == 0)
			$user = new User();
		else
			$user = User::find($userId);

		$this->layout->content = View::make('admin.backend.change_profile', array('user'=>$user));
	}

	public function userManagement(){
		$user = new User();
		$allUser = $user->all();
		$this->layout->content = View::make('admin.backend.user_management', array('allUser'=>$allUser));
	}

}