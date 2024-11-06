<?php 
require "../../../database/Direction.php";

$direction = new Direction;
$direction = $direction -> editDirection($_POST['id'], $_POST['name'], $_POST['code']);

?>