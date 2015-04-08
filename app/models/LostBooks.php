<?php
/**
 * Created by PhpStorm.
 * User: shivam
 * Date: 4/8/2015
 * Time: 3:47 PM
 */

class LostBooks {
    protected $table='lost_book';

    function books()
    {
        return $this->belongsTo('Book');
    }

    function users() {
        return $this->belongsTo('User');
    }
}