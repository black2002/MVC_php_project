<?php

/**
 * Created by PhpStorm.
 * User: -
 * Date: 17.01.2018
 * Time: 10:32
 */
class Controller
{
public function model($model){
    require_once '../app/models/'.$model.'.php';
    return new $model;
}
    public function view($view,$data=[]){
require_once '../app/views/'. $view.'.php';
    }
}