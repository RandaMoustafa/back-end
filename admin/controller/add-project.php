<?php
$errors = "";
if(empty($_POST['name'])){
//echo 'name is requird';
$errors .= ' $name = Name is requird';
}
if(empty($_POST['project-manger'])){
 //echo 'Project Manger is requird';
 $errors .=  '$project-manger = Project Manger is requird';
} 
echo implode('&' , $errors);
die();

if (count($errors) > 0) {
    header ("Location:?p=add-project&errors=1$errors");
}
