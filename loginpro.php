<?php

    
    $id = $_POST["id"];
    $password = $_POST["password"];
    
    if($id && $password){
        mysql_connect("localhost","yakuta1","yakuta11") or die ("No connection");
        
        mysql_select_db("ajax_test");
        
        $query = mysql_query("SELECT * FROM login WHERE id='$id'");
        
        
               
        $num_rows = mysql_num_rows($query);
        
        if ($num_rows != 0){
            while ($row = mysql_fetch_assoc($query)){
               $dbid = $row['id'];
               $dbpass = $row['password'];
               
               }
                if($id != $dbid){
                    
                    echo "wrong name";
                    
                }else{
                    if($password==$dbpass){
                        
                      echo "You are In";
                      
                    }else{echo "Wrong password";}
                }
            
        }

    }else {echo "You need to type in login and password!";}


?>