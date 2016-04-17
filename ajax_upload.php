<?php 
    mysql_connect("localhost","yakuta1","yakuta11") or die("Culdn't Connect");
    mysql_select_db("ajax_test");
    
    
    
  $result = mysql_query("SELECT * FROM test");
   
   echo "<table>";
   echo "<thead><td>First Name</td><td>Last Name</td></thead>";
    
   while($row = mysql_fetch_array($result)){
        echo "<tr>";
        echo "<td>";
        echo $row['firstname'];
        echo "</td>";
        echo "<td>";
        echo $row['lastname'];
        echo "</td>";
        echo "</tr>";
        
   } 
    echo "</table>";

?>