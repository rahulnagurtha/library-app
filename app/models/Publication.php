<?php
/**
 * Created by PhpStorm.
 * User: aneeshdash
 * Date: 27/11/14
 * Time: 10:41 AM
 */

class Publication extends Eloquent
{
    use SoftDeletingTrait;
    protected $table = 'publications';

    function book()
    {
        return $this->hasMany('Book');
    }
}