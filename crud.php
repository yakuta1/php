<?php
    $firstname = "Anton";
    $lastname = "Yakuta";
    
    mysql_connect("localhost","yakuta1","yakuta11") or die("We couldn't connect");
    
    mysql_select_db("ajax_test");
    
   //$query = mysql_query("INSERT INTO test VALUES ('$firstname','$lastname')");
   //$namber = mysql_affected_rows();
   //echo $namber." of affected rows";
   
      
   $result = mysql_query("SELECT * FROM test");
    
   while($row = mysql_fetch_array($result)){
        echo $row['firstname']."  ".$row['lastname']."<br>";
   } 
   
   
   echo "<hr style='color:red' >";
   // $result = mysql_query("UPDATE test SET firstname='test', lastname='test' WHERE firstname='$firstname'");
   
   
   
    
    $result = mysql_query("DELETE FROM test WHERE firstname='test'");

    
    
    
    $result = mysql_query("SELECT * FROM test");
    $count = mysql_num_rows($result);
    
       while($row = mysql_fetch_array($result)){
            echo $row['firstname']."  ".$row['lastname']."<br>";
       } 
    echo "<br>Number of Rows Left: ".$count;   
       
       
  mysql_close();  

 ?>