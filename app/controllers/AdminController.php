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
        return Redirect::route('adminlogin')->with('error', $error)->withInput();
    }

    public function logout()
    {
        Auth::admin()->logout();
        return Redirect::route('adminlogin');
    }

    public function abcd()
    {
        $fp=fsockopen('ssl://202.141.80.13',995,$error,$errstr,10);
        if($fp) {
            $st = stream_set_blocking($fp, 1);
            $trash = fgets($fp, 128); // Trash to hold the banner
            fwrite($fp, "user $webmail\r\n"); // POP3 USER CMD
            stream_set_timeout($fp,2);
            $user = fgets($fp);
            $u = 'hi';
            if (trim($user) == '+OK') {
                fwrite($fp, "pass $password\r\n");
                stream_set_timeout($fp,2);
                $pass = fgets($fp, 128);
                if (trim($pass) == '+OK Logged in.') {
                    $u = 'Successfully Logged In';
                } else {
                    $u = 'Wrong Credentials';
                }
            } else {
                $u = 'Try Again';
            }
            fwrite($fp,"quit\r\n");
            stream_set_timeout($fp,2);
            fclose($fp);
        }
        else {
            $u='Connection Unsuccessful';
        }
        return View::make('admin.test')->with('data', $u);
    }

    public function test()
    {
//        Mail::send('emails.testmail', array('name' => 'Kunaal Jain') ,function($message)
//        {
//            $message->from('a.dash@iitg.ernet.in', 'Aneesh Dash');
//            $message->to('aneeshdash@gmail.com', 'Aneesh Dash')->subject('Hello!');
//        });
        return View::make('admin.home');
    }

    public function update()
    {
        return View::make('admin.updates');
    }

    public function lost()
    {
        return View::make('admin.lostBook');
    }

    public function userprofile()
    {
        return View::make('admin.profile');
    }

    public function tabusers()
    {
        return View::make('admin.tables.users');
    }
}
