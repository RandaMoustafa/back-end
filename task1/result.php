<?php
echo '<h1>Welcome</h1>';
print_r($_GET['user']);
echo '<h1>your password is</h1>';
print_r($_GET['password']);
echo "<h3>Your phone number is </h3>";
print_r($_GET['tel']);
echo "<h3>Your email is</h3>";
print_r($_GET["email"]);
echo "<h3>About u</h3>";
print_r($_GET['message']);
echo "<h3>Your Gender</h3>";
print_r($_GET['gender']);
echo "<h3>Your Date of birth is </h3>";
print_r($_GET['b-day']);
echo "<h3>Your Filed is </h3>";
print_r($_GET['field']);
echo "<h3>Your Favorite color is </h3>";
print_r($_GET['color']);
echo "<h3>Your cv </h3>";
print_r($_GET['file']);
echo "<h3>Your account is </h3>";
print_r($_GET['url']);
?>
