<?php
abstract class Controller
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function loadModel()
    {
        $path = 'models/' . $this->name . '.php';

        if (file_exists($path)) {
            require_once $path;
        }
    }
}
