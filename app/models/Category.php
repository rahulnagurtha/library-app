<?php
/**
 * Created by PhpStorm.
 * User: aneeshdash
 * Date: 27/11/14
 * Time: 10:41 AM
 */

class Category extends Eloquent
{
    protected $table = 'book_category';

    function user()
    {
        return $this->belongsToMany('User');
    }
    function books()
    {
        return $this->belongsToMany('Book');
    }
}