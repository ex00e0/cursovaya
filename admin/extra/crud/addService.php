<?php 
require "../../../database/Service.php";

$service = new Service;
$service = $service -> addService($_POST['price'], $_POST['name'], $_POST['description'], $_FILES);

?>