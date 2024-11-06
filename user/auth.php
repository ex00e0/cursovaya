<?php
require "../database/User.php";
$user = new User;
$user -> auth($_POST['phoneEmail'], $_POST['pass']);
?>