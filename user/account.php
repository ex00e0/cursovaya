<?php
require "../database/User.php";
// var_dump($_FILES);
$user = new User;
$user -> editAccount($_POST['name'], $_POST['phone'], $_POST['email'], $_FILES, $_POST['pass']);
?>