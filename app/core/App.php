<?php

/**
 * Created by PhpStorm.
 * User: -
 * Date: 17.01.2018
 * Time: 10:28
 */
class App
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
$this->parseUrl();
    }

    public function parseUrl (){
        if (isset($_GET['url'])){
            echo $_GET['url'];
        }
    }
}