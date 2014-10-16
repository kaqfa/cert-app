<?php 

class AuthController extends BaseController {

        public function __construct() {
            $this->beforeFilter('csrf', array('on'=>'post'));
        }

        /**
        * Display the login page
        * @return View
        */
        public function getLogin()
        {
                return View::make('admin.backend.pages.examples.login');
        }

        /**
        * Login action
        * @return Redirect
        */
        public function postLogin()
        {
                $credentials = array(
                        'username' => Input::get('username'),
                        'password' => Input::get('password')
                );

                if (Auth::attempt($credentials))
                {
                    return Redirect::intended('/backend');
                }

                return Redirect::back()->withInput()
                    ->withErrors('Kombinasi username/password tidak ada...');
        }

        /**
        * Logout action
        * @return Redirect
        */
        public function getLogout()
        {
                Auth::logout();
                return Redirect::to('/login');
        }

}