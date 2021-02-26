<?php

abstract class View
{
    public function __construct($view)
    {
        $this->view = $view;
    }
    
    public function render($html)
    {
        return $html;
    }
}
