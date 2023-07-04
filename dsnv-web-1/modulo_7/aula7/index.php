<?php 

    include('class1.php');
    include('class2.php');

    use \Sessao1\Class1 as class_exemplo;

    $class1 = new class_exemplo();

?>