<?php 
    session_start();
    setcookie('nome','joao',time() + (60*60*24), '/');

    echo $_COOKIE['nome'];

?>