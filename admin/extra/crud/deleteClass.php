<?php 
require "../../../database/ClassT.php";

$class = new ClassT;
$class = $class -> deleteClass($_GET['id']);

?>