<?php
/**
 * Created by PhpStorm.
 * User: shivam
 * Date: 4/8/2015
 * Time: 3:21 PM
 */

class Users extends Illuminate\Database\Eloquent{
    use UserTrait, RemindableTrait;


    protected $hidden = array('password', 'remember_token');
    protected $table='users';

    function books() {
        return $this->hasMany('Books');
    }

    function lost_books() {
        return $this->hasMany('LostBooks');
    }
    function ratings() {
        return $this->hasMany('Ratings');
    }
    function feedback() {
        return $this->hasOne('Feedback');
    }

}