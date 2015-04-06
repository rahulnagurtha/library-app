<?php

class AdminController extends BaseController {

    public function login()
    {
        return View::make('admin.login');
    }

    public function postlogin()
    {
        $admin=array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        if(Auth::admin()->attempt($admin, Input::get('remember')==='yes')) {
            return Redirect::intended('test');
        }
        if(Admin::where('username',Input::get('username'))->count()) {
            $error='Incorrect Password';
        }
        else {
            $error="Incorrect Username";
        }
        return View::make('admin.login')->with('error', $error)->withInput();
    }

    public function logout()
    {
        Auth::admin()->logout();
        return Redirect::route('adminlogin');
    }

    public function abcd()
    {
        return View::make('admin.home');
    }
}
