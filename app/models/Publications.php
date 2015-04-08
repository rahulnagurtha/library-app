<?php
/**
 * Created by PhpStorm.
 * User: aneeshdash
 * Date: 27/11/14
 * Time: 10:41 AM
 */

class Publications extends Eloquent
{
    protected $table = 'publications';

    function books()
    {
        return $this->hasMany('Book');
    }
}