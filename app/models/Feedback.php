<?php
/**
 * Created by PhpStorm.
 * User: aneeshdash
 * Date: 27/11/14
 * Time: 10:41 AM
 */

class Feedback extends Eloquent
{
    use SoftDeletingTrait;
    protected $table = 'feedback';

    function user()
    {
        return $this->belongsTo('User');
    }
}