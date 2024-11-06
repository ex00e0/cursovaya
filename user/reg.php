<?php
require "../database/User.php";
$user = new User;
$user -> reg($_POST['name'], $_POST['phoneEmail'], $_POST['pass']);
?>