<?php
use Illuminate\Database\Eloquent\Model as  Eloquent;
/**
 * Created by PhpStorm.
 * User: -
 * Date: 18.01.2018
 * Time: 12:43
 */
class User extends Eloquent
{
public $name;
    protected $fillable = ['name'];

}