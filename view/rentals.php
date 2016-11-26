<div class='col-xs-9'>
<?php
if(count($data) >0){
        echo "<h2>List of  Movies</h2>";
        displayRentalData($data);
} else {
        echo "Select Movie Type";
}
?>
</div>
<?php

function displayRentalData($data){
  echo "<table><tr><td>Name</td><td>Title</td>";
  echo "<td>Date-out</td></tr>";
  for($i=0; $i<count($data); $i++){
        echo "<tr><td>".$data[$i]['last_name'].", ".$data[$i]['first_name']."</td>";
        echo "<td>".$data[$i]['title']."</td>";
        echo "<td>".$data[$i]['date_out']."</td></tr>";
  }
  echo "</table>";
