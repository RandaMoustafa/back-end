<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container text-center">
<h1 class="text-center bg-primary">Form Control</h1>
<form action="result.php" method="Get">
<label for="name">Name</label>
<input type="text" name="user">
<label for="password">password</label>
<input type="password" name="password">
<br>
<label for="email">Email</label>
<input type="email" name="email">  |
<label for="tel">Tel</label>
<input type="tel" name="tel">
<br>
<label for="date" name="date"> Date of Birth</label>
<input type="date">
Gender:
<select name="gender" id="">
<option value="gender" name="male">Male</option>
<option value="gender" name="female">Female</option>
</select>
<br>

<label for="About">About</label>
<textarea name="message">write something....</textarea>
<br>
<br>
<input class="btn btn-danger" type="reset">
<button class="btn btn-primary">Login</button>

</form>
</div>
    
</body>
</html>