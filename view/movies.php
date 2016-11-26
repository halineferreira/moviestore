<!-- Create the content area, the right column -->
<div class='col-xs-9'>
<?php
if(count($data) >0){
        // display data
        echo "<h2>List of ".$type." Movies</h2>";
        displayData($data);
} else {
        // There is no data to display. Display an appropriate message
        echo "Select Movie Type";
}
?>
</div>
<?php

function displayData($data){
  echo "<table class='table table-bordered'><tbody id='tbody'>";
  for($i=0; $i<count($data); $i++){
        echo "<tr><td>".$data[$i]['title']."</td>";
        echo "<td>".$data[$i]['type']."</td>";
        echo "<td>".$data[$i]['year']."</td></tr>";
  }
  echo "</tbody></table>";

