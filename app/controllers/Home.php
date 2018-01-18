<?php

/**
 * Created by PhpStorm.
 * User: -
 * Date: 17.01.2018
 * Time: 10:43
 */
class Home extends Controller
{
public function index($name=''){
$user=$this->model('User');
    $user->name = $name;
//    echo $user->name;
    $this->view('home/index',['name'=>$user->name]);
}



}