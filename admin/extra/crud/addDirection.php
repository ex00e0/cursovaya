<?php 
require "../../../database/Direction.php";

$direction = new Direction;
$direction = $direction -> addDirection($_POST['name'], $_POST['code']);

?>