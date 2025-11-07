<?php

session_start();

if(!isset($_POST['username']))
{
    header("Location: login.php");
    exit();
}
else
{
    echo 
    "
    <h2>Profile</h2>
    <tr>
    <th>Username: {$row['username']}</th>
    <th>Email: {$row['email']}</th>
    </tr>
    ";
}

?>

<a href="update_profile.php">Edit Email</a>