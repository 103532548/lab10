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
    <td>{$row['username']}</td>
    <td>{$row['email']}</td>
    </tr>
    ";
}

?>

<a href="update_profile.php">Edit Email</a>