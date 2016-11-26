<?php 

//connect to the database
include('pdo_connect.php');

//get data using model
include('model/moviesmodel.php');

//update movie info
$result = updateMovieInfo();
echo $result;

		
		
?>