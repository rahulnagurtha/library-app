<?php
/**
 * Created by PhpStorm.
 * User: aneeshdash
 * Date: 27/11/14
 * Time: 10:41 AM
 */

class Books extends Eloquent {
    protected $table='books';

    function category() {
        return $this->belongsTo('Category');
    }

    function publication() {
        return $this->belongsTo('Publications');
    }


    function user() {
        return $this->belongsTo('User');
    }


    function lost(){
        return $this->hasOne('LostBooks');
    }


    function transaction(){
        return $this->hasMany('Transactions');
    }

}