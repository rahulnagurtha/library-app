<?php

class UserController extends BaseController {

    public function home()
    {
        return View::make('user.home');
    }
    public function accounts()
    {
        return View::make('user.accounts');
    }
    public function wish_list()
    {
        return View::make('user.wish_list');
    }
    public function queued_books()
    {
        return View::make('user.queued_books');
    }
    public function contacts()
    {
        return View::make('user.contacts');
    }
    public function lost_book()
    {
        return View::make('user.lost_book');
    }
    public function donate_book()
    {
        return View::make('user.donate_book');
    }
    public function login()
    {
        return View::make('user.login');
    }
    public function lock_screen()
    {
        return View::make('user.lock_screen');
    }
    public function postlogin()
    {
        $webmail = Input::get('webmail');
        $password = Input::get('password');
        $server='ssl://202.141.80.'.Input::get('server');
        if(User::where('webmail',$webmail)->count())
        {
            $fp = fsockopen($server, 995, $err, $errstr, 10);
            if ($fp) {
                $st = stream_set_blocking($fp, 1);
                $trash = fgets($fp, 128); // Trash to hold the banner
                fwrite($fp, "user $webmail\r\n"); // POP3 USER CMD
                stream_set_timeout($fp, 2);
                $user = fgets($fp);
                $u = 'hi';
                if (trim($user) == '+OK') {
                    fwrite($fp, "pass $password\r\n");
                    stream_set_timeout($fp, 2);
                    $pass = fgets($fp, 128);
                    if (trim($pass) == '+OK Logged in.') {
                        $u = 'Successfully Logged In';
                        return Redirect::route('home');
                    } else {
                        $error = 'Wrong Details';
                    }
                } else {
                    $error = 'There was some error. Please Try Again';
                }
                fwrite($fp, "quit\r\n");
                stream_set_timeout($fp, 2);
                fclose($fp);
            }
            else
            {
                $error='cannot connect';
            }
        }
        else {
            $error='Webmail ID doesnot exist. Please contact library admin.';
        }
        return Redirect::route('login')->withInput()->with('error',$error);
    }
    public function logout()
    {

    }

}
