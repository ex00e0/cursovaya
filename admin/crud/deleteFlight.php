<?php 
require "../../database/Flight.php";

$flight = new Flight;
$flight = $flight -> deleteFlight($_GET['number']);

?>