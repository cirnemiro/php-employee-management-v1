<?php

class Router
{
    public function __construct()
    {
        echo "I'm the Router";

        $url = explode('/', rtrim($_GET['url'], '/'));

        echo '<pre>';
        print_r($url);
        echo '</pre>';
    }

    public function setRoute($route = 'login')
    {
    }

    public function getRoute()
    {
    }
}
