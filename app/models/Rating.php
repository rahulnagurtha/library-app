<?php
/**
 * Created by PhpStorm.
 * User: aneeshdash
 * Date: 27/11/14
 * Time: 10:41 AM
 */

class Rating extends Eloquent
{
    use SoftDeletingTrait;
    protected $table = 'book_ratings';

    function user()
    {
        return $this->belongsToMany('User');
    }
    function book()
    {
        return $this->belongsToMany('Book');
    }
}