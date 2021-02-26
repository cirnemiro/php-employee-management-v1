<?php
require_once CLASS_VIEW;

$login = new View("
<div>
    <form action='login/checkUser' method='POST'>
        <input type='text' name='userName'></input>  
        <input type='text' name='userPassword'></input>   
        <input type='submit'>Log In</input>
    </form>
</div>
");





