<?php

class Router 
{
    function __construct(){
        echo "I'm the Router";

        $url = explode('/',rtrim($_GET['url'],'/'));

        echo '<pre>';

        print_r($url);

        echo '</pre>';
    }
}