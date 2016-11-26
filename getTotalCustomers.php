el<?php 


//connect to the database
include('pdo_connect.php');

//get data using model
include('model/moviesmodel.php');

//get the total number of customers
$total = getTotalCustomers();

echo $total['total'];

?>