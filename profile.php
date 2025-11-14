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
    $result = mysqli_query($conn, "SELECT * FROM user");
    

    if(!$result)
    {
        header("Location: login.php");
        exit();
    }
    else
    {
        echo "<h2>Profile</h2>";
        echo 
        "
        <table border='1'>
        <tr>
        <th>Username</th>
        <th>Email</th>
        </tr>
        ";

        while($row = mysqli_fetch_assoc($result))
        {
            echo 
            "
            <tr>
            <td>{$row['username']}</td>
            <td>{$row['email']}</td>
            </tr>
            ";
        }

        echo "</table>";
        mysqli_free_result($result);

    }
}

?>

<a href="update_profile.php">Edit Email</a>