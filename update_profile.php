<!DOCTYPE html>
<html lang="en">
    
<body>
<form action="profile.php" method="POST">
    New Email: <input type="email" name="email">
    <input type="submit" value="Save">
</form>
</body>
</html>

<?php

session_start();

$host = "localhost";         // because XAMPP runs the server locally
$user = "root";          // default username for XAMPP's MySQL
$pwd = "";              // default password is empty in XAMPP
$sql_db = "login";  // replace with the actual name of your database

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

$username=$_SESSION['username'];
$email=$_POST['email'];

mysqli_query($conn,"UPDATE user SET email='$email' WHERE username='$username'");
header("Location: profile.php");

?>