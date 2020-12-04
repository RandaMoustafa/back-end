<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registeration form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
</head>
<body>
<div class="form">
<div class="container">
<div class="title">
<h1>Registeration Form</h1>
<h5>Fill the form for registartion</h5>
</div>
<form action="" method="POST" >
    <div class="row">
<label for="user">
<h3>UserName <input type="text" name="user">
</h3>
</label>
<label for="email">
<h3>Your Email <input type="email" name="email">
</h3>
</label>
<br>
<label for="password">
<h3>password <input type="password" name="password">
</h3>
</label>
<br>
<label for="confirm-password">
<h3>confirm password <input type="password" name="confirm-password">
</h3>
</label>
<br>
<label for="tele">
<h3>Mobile Number <input type="number" name="mobile">
</h3>
</label>
<label for="gender">
<h3>Gender
<select name="gender">
<option value="male">Male</option>
<option value="female">Female</option>
</h3>
</select>
</label>
<br>
<input type="submit" class="btn btn-success">
</div>

</form>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $isError = false;
    if(empty($_POST['user'])){
        $isError = true;
        echo 'please enter your user name' .' <br>';
    } if(empty($_POST['password'])){
        $isError = true;
        echo 'please enter your user password'.' <br>';
    }if(empty($_POST['email'])){
        $isError = true;
        echo 'please enter your  email'.' <br>';
}if(empty($_POST['confirm-password'])){
    $isError = true;
    echo 'please confirm your  password'.' <br>';
}if(empty($_POST['mobile'])){
    $isError = true;
    echo 'please enter your Mobile'.' <br>';
}if(empty($_POST['gender'])){
    $isError = true;
    echo 'please enter your Gender';
} if(!$isError){
    include 'welcome.php';
}
} 
?>
</div>

</div>

    
</body>
</html>

