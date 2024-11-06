<?php 
require "../../database/Order.php";

$order = new Order;
$order = $order -> editStatusOrder($_GET['number']);

?>