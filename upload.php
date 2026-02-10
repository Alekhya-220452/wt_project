<?php
    if(isset($_FILES['fn'])){
        $filename=$_FILES['fn']['name'];
        $tmpname=$_FILES['fn']['tmp_name'];
        move_uploaded_file($tmpname,"uploads/" . $filename);
        echo "file uploaded successfully";
        echo "<a href='form.php'>go back to home to download</a>";
    }
    else{
        echo " upload file first";
    }
    
?>