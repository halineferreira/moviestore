<?php 
//connect to the database
include('pdo_connect.php');

//get data using model
include('model/moviesmodel.php');
//get the total number of customers
$rental_info = getRentalData();

$msg = '';
for ($i=0; $i<$count($rental_info); $i++ ){
	$msg .= "<tr><td>".$rental_info[$i]['last_name'].", ".$rental_info[$i]['first_name']."</td>";
	$msg .= "<td>".$rental_info[$i]['title']."</td><td>".$rental_info[$i]['date_out']."</td></tr>";
}
echo $msg;
?>