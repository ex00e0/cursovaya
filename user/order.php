<?php
require "../database/Order.php";
$order = new Order;
$order = $order -> makeOrder($_POST);

?>