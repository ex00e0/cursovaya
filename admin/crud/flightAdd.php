<?php 
require "../../database/Flight.php";

$flight = new Flight;
$flight = $flight -> addFlight($_POST['date_dep'], $_POST['date_arr'], $_POST['departure'], $_POST['arrival'], $_POST['airplane_number'], $_POST['places']);

?>