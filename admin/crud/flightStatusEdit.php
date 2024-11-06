<?php 
require "../../database/Flight.php";

$flight = new Flight;
$flight = $flight -> editStatusFlight($_POST['status_id'], $_POST['terminal'], $_POST['gate'], $_POST['status']);

?>