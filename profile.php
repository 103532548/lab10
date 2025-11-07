<?php

session_start();

if(!isset($_POST['username']))
{
    header("Location: login.php");
    exit();
}

?>

<h2>Profile</h2>
Username: <?= $info['username'] ?><br>
Email: <?= $info['email'] ?><br><br>

<a href="update_profile.php">Edit Email</a>

