<?php

// $view = new View('header', 'main', 'footer');

class LoginView extends View
{
    public function loginView()
    {
        echo '<div>HOLA</div>';
    }
}

$login = new LoginView('un altre cosa');

$login->render($this->loginView());
