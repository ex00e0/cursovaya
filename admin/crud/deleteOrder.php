<?php 
require "../../database/Order.php";

$order = new Order;
$order = $order -> deleteOrder($_GET['number']);

?>