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

if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql ="UPDATE user SET email='$email' WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_assoc($result))
    {
        $_SESSION['email'] = $row['email'];
        header("Location: profile.php");
        exit();
    }

    mysqli_free_result($result);
}

?>