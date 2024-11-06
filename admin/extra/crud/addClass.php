<?php 
require "../../../database/ClassT.php";

$class = new ClassT;
$class = $class -> addClass($_POST['name'], $_POST['hand_luggage'], $_POST['luggage'], $_POST['price'] );

?>