<?php

class AdminController extends BaseController {

    public function hello()
    {
        return View::make('admin.home');
    }
}
