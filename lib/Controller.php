<?php
abstract class Controller
{
    private $name
    function __construct($name)
    {
        $this->name = $name;
    
    }
    function loadModel()
    {
        $path = 'models/' . $this->name . '.php';

        if (file_exists($path)) {
            require_once $path;
        }
    }
}

