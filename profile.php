<?php

session_start();

if(!isset($_POST['username']))
{
    header("Location: login.php");
    exit();
}
else
{
    <h2>Profile</h2>
    <p>Username: {$info['username']}</p>
    <p>Email: {$info['email']}</p>
}

<a href="update_profile.php">Edit Email</a>

?>