<?php

class UserController extends BaseController {

    public function hello()
    {
        return View::make('admin.home');
    }

}
