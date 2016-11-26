<?php
include('pdo_connect.php');
include('model/moviesmodel.php');
$status = addNewMovie();
echo $status;
?>