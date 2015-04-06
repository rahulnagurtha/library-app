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


}
