<?php 
require "../../../database/Direction.php";

$direction = new Direction;
$direction = $direction -> deleteDirection($_GET['id']);

?>