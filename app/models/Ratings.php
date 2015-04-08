<?php
/**
 * Created by PhpStorm.
 * User: aneeshdash
 * Date: 27/11/14
 * Time: 10:41 AM
 */

class Ratings extends Eloquent
{
    protected $table = 'book_ratings';

    function users()
    {
        return $this->belongsToMany('User');
    }
    function books()
    {
        return $this->belongsToMany('Book');
    }
}