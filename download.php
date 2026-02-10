<?php
$file=$_GET['file'];
$path="uploads/" . $file;
if(file_exists($path)){
    header("content-Disposition:attachment; filename=" . basename($path));
    readfile($path);
}
?>