<?php
require_once CLASS_CONTROLLER;
echo 'login controller';
class LoginController extends Controller
{
    
    function __construct($name){
        parent::__construct($name);
        $this->load(MODELS);
        $this->load(VIEWS);
    }
    public function checkUser($user)
    {
        $userName = $_REQUEST['userName'];
        $userPassword = $_REQUEST['userPassword'];
        if ($userName == 'pepito') {
          if ($userPassword === 'hello') {
            echo 'you are logged';
          }
        }else{
            header("Location:../index.php");
        }
    }
    public function logout()
    {
        // deslogearse
    }
    public function error(){
        
    }
}
