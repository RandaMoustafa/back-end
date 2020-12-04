
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>login</title>
</head>
<body>
<div class="login">
<div class="container">
<div class="title" >
<h1>LOG IN</h1>
<p>please put your email and password to log in</p>
</div>
<form action="" method="POST">
<label> Email <input type="email"  name='user' required>  </label>
<label for="password"> password <input type="password" name="password" required></label>
<br>
<button name="submit" class="btn btn-primary"> login</button>
<br>
if you are not a user please <a href="../form/form.php">sign up</a>
</form>
<?php
if (isset($_POST['submit'])){
    $mail = $_POST['user'];
    $pw = $_POST['password'];
    if($mail == 'admin@admin.com' && $pw == '1234') {
        header("location: welcome.php");
        exit ();
    }  if($mail == 'info@admin.com' && $pw == '4567') {
        header("location: welcome.php");
        exit ();
    }
    else {
        echo "invalid email/password";
    }
}

?>
</div>
</div>
    
</body>
</html>