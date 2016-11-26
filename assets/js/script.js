$(document).ready(function(){
// Define an event handler for the button with the id 'customer-total'
$('#customer-total').on('click', function(){
   $.ajax({
        type: "post",
        url: "http://washington.uww.edu/cs382/ferreirah01/moviestore2/getTotalCustomers.php",
        success: function (response) {
                // display response
                 alert(response);
        }
  });
 });

$('#updateMovie').on('click', function(){
	//read input values
	var title = $('#movieTitle').val();
	var type = $('#movieType').val();
	var year = $('#movieYear').val();
	var movie_id = $('#movie_id').val();
	//prepere a set of key/value paires
	var dataStr = "title="+title+"&type="+type+"&year="+year;
	dataStr +="&movie_id="+movie_id;
	alert(dataStr);
	$.ajax({
		type: "post",
		data: "dataStr",
		url: "http://washington.uww.edu/cs382/ferreirah01/moviestore2/updateMovieInfo.php",
		success: function(response){
			//alert(response);
			if (response>=1){
				alert('Update one record');
			} else alert('Not updated');
		}
	});
	
});
// Define an event handler for the button with the id 'rentals'
$('#rentals').on('click', function(){
   $.ajax({
        type: "post", // define the method (get/post)
        url: "http://washington.uww.edu/cs382/ferreirah01/moviestore2/getRentalInfo.php", //php script
        success: function (response) {
                /* Identify an existing element and then use it to display the response
                   Update content of the table body  with id the id 'tbody'
                   Note: table must be exist for this to work
                */
                 $('#tbody').html(response); // replace HTML content with response
        }
  });
 });

 $('#addMovie').on('click', function(){
        var movieType = $('#movieType').val();
        var movieTitle = $('#movieTitle').val();
        var year = $('#movieYear').val();
        // define data
        var formData = "type="+movieType+"&title="+movieTitle+"&year="+year;
        $.ajax({
                type: 'post',
                data :formData,
                url : 'http://washington.uww.edu/cs382/ferreirah01/moviestore2/addNewMovie.php',
                success : function(response){
                	if(response == 1){
                		alert("Added new movie");
                	} else{
                		alert("Could not add");
                	}
                }
        });
 });
});

