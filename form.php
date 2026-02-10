<html>
<head>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        upload image:<input type="file" name="fn">
        <input type="submit" name="submit" value="upload a file">
    </form>
    
    
<?php
    $files=scandir("uploads");
    foreach($files as $file){
        if($file !="." && $file !=".."){
            echo $file ."|";
            echo "<a href='download.php?file=$file'>download</a>."."<br>";
        }
    }

?>
</body>

</html>