<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
</head>

<body>

    <header>
        <h1>Login</h1>
    </header>

<form method="post" action="profile.php">
<label for="username">Username:</label> <input type="text" name="username" required><br>
<label for="password">Password:</label> <input type="password" name="password" required><br>
<label for="email">Email:</label> <input type="email" name="email" required><br>
<input type="submit" value="Login">
</form>

<footer>

</footer>

</body>

</html>

<?php

session_start();

$host = "localhost";         // because XAMPP runs the server locally
$user = "root";          // default username for XAMPP's MySQL
$pwd = "";              // default password is empty in XAMPP
$sql_db = "login";  // replace with the actual name of your database

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['username']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if ()
    {
        //...
        header("Location: profile.php");
        exit();
    }
    else
    {
        echo "Invalid login. <a href='login.html'>Try again</a>";
    }
}

?>