<?php
// define variables
$mode = '';
$data = array();
// connect to the database
include('pdo_connect.php');
//get data using model
include('model/moviesmodel.php');

// get a list of distinct movie types
  $movie_type = getMovieTypes();
/* Display common information. In this application, the head section ( HTTP Header),  page header  (top div element),
   and left column (links) are common sections.
   Use a separate header.php file to include these sections and save it in the view folder.
*/
include('view/header.php');

/* The key 'mode' is the most important key that is common to all the links. Read its value first and then use a
   switch statement to perform a specific user request.
 */
if (isset($_GET['mode'])) {
        $mode = $_GET['mode'];
}
switch ($mode){
        case 'movieList' :
           // Display a list of movies. Use the 'genre' to identify the type of movies to be displayed.
           if ($_GET['genre'] == 'all'){
                $type = 'All';
                $data = getAllMovies();
           } else{
                $type = $_GET['genre'];
                $data = getMovies($type);
           }
           // Display list of movies
           include('view/movies.php');
           break;
        case 'rentals' :
                /* if user requests transactions  then display it */
                $data = getRentalData();
                include('view/rentals.php');
                break;
                
        case 'addMovie' :
                // display form
                include('view/movieForm.php');
      			// test insert statement
                $data = addNewMovie();
                break;
                
         case 'update' :
                // If status = display then display movie data
                if ($_GET['status'] == 'display'){
                        $movie_id = $_GET['movie_id'];
                        $data = getMovieData($movie_id);
                        include('view/updateMovieForm.php');
                } else {
                        // get a list of all the movies
                        $data =getMovieList();
                        // create a list of movies
                        include('view/movieList.php');
                }
                break;
                
        default :
                // Default case. display home page
                include('view/default.php');
                break;
}

//include the common footer
include('view/footer.php');
?>

