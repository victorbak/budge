<?php
/**
 * Created by PhpStorm.
 * User: victo
 * Date: 2017-12-07
 * Time: 1:47 AM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;


class Bill extends Model
{
    protected $fillable = [
        'name',
        'price',
        'userId'
    ];
}
