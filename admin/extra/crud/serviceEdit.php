<?php 
require "../../../database/Service.php";

$service = new Service;
$service = $service -> editService($_POST['number'], $_POST['price'], $_POST['name'], $_POST['description'], $_FILES);

?>