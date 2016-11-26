<div class='col-xs-9'>
	<h3>Update Movie Data</h3>
	<form>
		<table class='table'>
			<tr>
				<td>Movie Title:</td>
				<td><input type='text' name='movieTitle' id='movieTitle'
					value='<?php echo $data["title"]; ?> ' /></td>
			</tr>
			<tr>
				<td>Movie Type:</td>
				<td><input type='text' name='movieType' id='movieType'
					value='<?php echo $data['type']; ?> '/></td>
			</tr>
			<tr>
				<td>Year:</td>
				<td><input type='text' name='movieYear' id='movieYear'
					value='<?php echo $data['year']; ?>' /></td>
			</tr>
		</table>
		<p>
			<button type='button' id='updateMovie' class='btn btn-primary'>Update</button>
			<button type='reset' class='btn btn-danger'>Clear</button>
		</p>
<!-- add a hidden form to include movie_id -->
<input type='hidden' name="movie_id" id="movie_id" value="<?php echo $data['movie_id'];?>"/>
	</form>
</div>


