<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <!-- Set the viewport so this responsive site displays correctly on mobile devices -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Page title </title>
 <!-- Include bootstrap CSS -->
 <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel='stylesheet' href='assets/css/styles.css'>
<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<div class='col-xs-12'><!-- top section -->
        <h2>Online Movie Store</h2>
</div>

<div class='col-xs-3'><!-- Left column -->
<!-- The following links use two key/value pairs, mode and genre,  to define user requests. -->
<ul>
  <li><a href='index.php?mode=movieList&genre=all'>All Movies<a></li>
<?php
  for ($i=0; $i<count($movie_type); $i++){
    echo "<li><a href='index.php?mode=movieList&genre=".$movie_type[$i]['type']."'>".$movie_type[$i]['type']."</a></li>";
  }
?>
</ul>

<!-- use a single key/value pair -->
<p><button type='button' id='rentals' class='btn'>Display rentals</button></p>
<p><button type='button' id='customer-total' class='btn'>Number of customers</button></p>
<p><a href='index.php?mode=addMovie'>Add new movie</a></p>
<p><a href='index.php?mode=update'>Update Movie</a></p>

</div>
<script src='assets/js/script.js'>
</script>

