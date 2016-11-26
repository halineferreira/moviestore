<?php
function getAllMovies(){
        // get a list of all movies
        // define SQL statement
        $sql ='SELECT title, type, year FROM movies';
        return getData($sql);
}

function getMovies($type){
        $sql = 'SELECT title, type, year 
        		FROM movies
                WHERE type="'.$type.'"';
        return getData($sql);

}

function getMovieTypes(){
        $sql = 'SELECT DISTINCT type 
        		FROM movies';
        return getData($sql);
}
function getRentalData(){
        $sql = "SELECT c.first_name, c.last_name, m.title, r.date_out 
        		FROM customers AS c, movies AS m, rentals AS r 
        		WHERE c.member_id = r.member_id AND m.movie_id = r.movie_id 
        		AND m.type='Drama'";
        return getData($sql);
}

function getTotalCustomers(){
        $sql = "SELECT COUNT(last_name) AS total 
        		FROM customers";
        return getOne($sql);
}

function getMovieList(){
	$sql = 'SELECT movie_id, title 
			FROM movies';
	return getData($sql);
}

function getMovieData($movie_id){
	$sql = "SELECT movie_id, title, type, year 
			FROM movies
			WHERE movie_id=".$movie_id;
		return getOne($sql);
}
function updateMovieInfo(){
	$title = $_POST['title'];
	$type = $_POST['type'];
	$year = $_POST['year'];
	$movie_id = $_POST['movie_id'];
	//define sql statement
	$sql = "UPDATE movies SET title='".$title."', year='".$year."', type='".$type."' WHERE movie_id = '".$movie_id."'";
	return $sql;
}

function updateRecord($sql){
	global $db;
	$stm= $db->prepare($sql);
	$result = $stm->execute();
	return $result;
}
function addNewMovie(){
        global $db;
        // prepare SQL statement
        $sql = "INSERT INTO movies(title, year, type) VALUES
                ('".$_POST['title']."','".$_POST['year']."', '".$_POST['type']."')";
        $stm = $db->prepare($sql);
        $status = $stm->execute();
        return $status;
}
function getData($sql){
        global $db; // access global variable $db
        // prepare SQL statement
         $stm= $db->prepare($sql);
        // execute the statement
        $stm->execute();
        // get all records (array)
        $data = $stm->fetchAll();
        return $data;
}

function getOne($sql){
        // return a single record
        global $db; // access global variable $db
        // prepare SQL statement
         $stm= $db->prepare($sql);
        // execute the statement
        $stm->execute();
        // get all records (array)
        $data = $stm->fetch();
        return $data;
}
?>

