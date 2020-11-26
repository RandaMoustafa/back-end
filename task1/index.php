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
<input type="date" name="b-day">
Gender:
<select name="gender">
<option value="male">Male</option>
<option  value="female">Female</option>
</select>
<br>

<label for="About">About</label>
<textarea name="message">write something....</textarea>
<br>
<h3>Your filed</h3>
<label for="developer">Developer</label>
<input type="checkbox" name="field" value="developer">
<br>
<label for="fullstack">Fullstack</label>
<input type="checkbox" name="field" value="fullstack">
<br>
<label for="freelancer">Freelancer</label>
<input type="checkbox" name="field" value="freelancer">
<br>
<label for="color"> your favorite color</label>
<input type="color" name="color">
<br>
<h3>upload your cv</h3>
<input type="file" name="file" accept="doc,pdf">
<br>
<label for="url"> your account</label>
<input type="url" name="url">
<br>
<input class="btn btn-danger" type="reset">
<button class="btn btn-primary">Login</button>

</form>
</div>
    
</body>
</html>