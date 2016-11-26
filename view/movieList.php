<div class='col-xs-9'>

<h3>Select a movie</h3>

<table class='table'>

<tr><td>ID</td><td>Title</td><td>Action</td></tr>

<?php

 for ($i=0; $i<count($data); $i++){

        echo "<tr><td>".$data[$i]['movie_id']."</td>";

        echo "<td>".$data[$i]['title']."</td>";

        echo "<td><a href='index.php?mode=update&status=display&movie_id=".$data[$i]['movie_id']."'>Update</a>

                </td></tr>";

}

?>

</table>

</div>