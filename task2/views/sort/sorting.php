<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $isError =false;
    $e = $_POST['e'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    

    if($_POST['sort'] == 'Id'){
        echo '<h1>Emloyee Id is... </h1>';
        echo $e .'<br>' , $b . '<br>' ,$c  ;

       } 
       if($_POST['sort'] == 'name'){
        echo '<h1>Emloyee Name is... </h1>';
        echo $_POST['employee-a'] ;

       } 

      }