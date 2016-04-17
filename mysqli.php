<?php
    //Connect to Mysql
    $connection = mysqli_connect("localhost","yakuta1","yakuta11","ajax_test");
    
        
    //Test Connection
    if(mysqli_connect_errno()){
        echo "Failed to Connect: ".mysqli_connect_error();
    }

?>