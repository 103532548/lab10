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
    <th>{$row['username']}</th>
    <th>{$row['email']}</th>
    </tr>
    ";
}

?>

<a href="update_profile.php">Edit Email</a>