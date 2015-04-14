<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('admin.home');
	}

    public function func_edit()
    {
        if(Auth::admin()->guest()) {
            return 'Abhi tum bachhe ho!!! :)';
        }
        else {
            $type=Input::get('type');
            $id=Input::get('id');
            $name=Input::get('name');
            $webmail=Input::get('webmail');
            $roll=Input::get('roll');
            $cat=Input::get('cat');
            $user=User::find(intval($id));
            $user->name=$name;
            $user->webmail=$webmail;
            $user->roll=$roll;
            $user->type=$cat;
            $user->save();
            return 'success';
        }
    }

    public function func_add()
    {
        if(Auth::admin()->guest()) {
            return 'Abhi tum bachhe ho!!! :)';
        }
        else {
            $type=Input::get('type');
            $name=Input::get('name');
            $webmail=Input::get('webmail');
            $roll=Input::get('roll');
            $cat=Input::get('cat');
            $user=new User;
            $user->name=$name;
            $user->webmail=$webmail;
            $user->roll=$roll;
            $user->type=$cat;
            $user->save();
            return 'success';
        }
    }

    public function func_del()
    {
        if(Auth::admin()->guest()) {
            return 'Abhi tum bachhe ho!!! :)';
        }
        else {
            $type = Input::get('type');
            $id = Input::get('id');
            User::destroy(intval($id));
            return 'success';
        }
        $book=Book::where('id','1')->first();
        $publication=$book->publication()->name;
    }

    public function book_detail()
    {
        $id=Input::get('id');
        return View::make('functions.book_detail')->with('book', Book::find(intval($id)));
    }

    public function pay_fine()
    {
        $id=intval(Input::get('user'));
        $amt=intval(Input::get('amt'));
        $user=User::find($id);
        $user->fine -= $amt;
        if($user->save()) {
            return 'Fine Paid';
        }
        else {
            return 'Error Occured.\n Try Again';
        }
    }

    public function show_book() {
        $code=intval(Input::get('code'));
        $book=Book::where('code',$code)->first();
        return View::make('functions.show_book')->with('book', $book);
    }

}
