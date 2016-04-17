<?php
      
	//Loop through each file
        for($i=0; $i<count($_FILES['upload']['name']); $i++) {
  //Get the temp file path
        $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

  //Make sure we have a filepath
        if ($tmpFilePath != ""){
    //Setup our new file path
        $newFilePath = "./uploads/" . $_FILES['upload']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here

    }
  }
}
    header("Location: file_upload.php");
 ?>