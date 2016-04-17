<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

if(isset($firstname) && isset($lastname)){
    echo "Success";
}

?>