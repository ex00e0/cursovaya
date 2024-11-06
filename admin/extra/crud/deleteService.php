<?php 
require "../../../database/Service.php";

$service = new Service;
$service = $service -> deleteService($_GET['number']);

?>