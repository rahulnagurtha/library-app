<?php

class AdminController extends BaseController {

    public function master()
    {
        return View::make('admin.master');
    }

    public function abcd()
    {
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
}
