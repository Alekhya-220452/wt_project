<?php 

//$f=fopen("info.txt","w");
/*fwrite($f,"HELLO  WORLD");
fclose($f);*/

//$f=fopen("info.txt","r");
//echo fread($f,5);



//echo file_get_contents("info.txt");
//file_put_contents("info.txt","how are you");

//print_r(file("info.txt"));
//$f="info.txt";
//FILE INFORMATION

/*echo "file_exists:".file_exists($f)."<br>";
echo "file size:".filesize($f)."<br>";
echo "file type:".filetype($f)."<br>";
echo "fileatime:".date("d-m-y H:i:s",fileatime($f))."<br>";
echo "filectime:".date("d-m-y H:i:s",filectime($f))."<br>";
echo "filemtime:".date("d-m-y H:i:s",filemtime($f))."<br>";
echo "file perms:".fileperms($f)."<br>";
echo "file owner:".fileowner($f)."<br>";
echo "file group:".filegroup($f)."<br>";
echo "file inode:".fileinode($f)."<br>";

echo "<hr>";

copy($f,"copy.txt");
rename("info.txt","copy.txt");*/
//$f="copy.txt";
//echo "is_file:".is_file($f);
//echo "is_dir:".is_dir($f)."<br>";
/*mkdir("directory");
unlink("copy.txt");
rmdir("directory");*/

//DIRECTORY HANDLING
/*echo "get cwd:" . getcwd()."<br>";
//$file=scandir(".");
//print_r($file);
$dir=opendir(".");
while($f=readdir($dir)){
    echo $f . "<br>";
}
closedir($dir);*/

/*$fp=fopen("info.txt","r");
if(flock($fp,LOCK_SH)){
    echo "file locked successfully";
    flock($fp,LOCK_UN);
}
fclose($fp);*/


//TASK 3
/*$f=fopen("info.txt","w");
fwrite($f,"HELLO  WORLD");
fclose($f)*/

/*$f=fopen("info.txt","r");
echo fread($f,5);*/

/*$f=fopen("info.txt","a");
fwrite($f,"welcome");
fclose($f);*/

/*$f=fopen("info.txt","r+");
fwrite($f," to rgukt cse");
fclose($f)*/

/*$f=fopen("info.txt","w+");
fwrite($f," students are very good");
fclose($f);*/

/*$f=fopen("info.txt","a+");
fwrite($f," more");
fclose($f);*/

/*$f=fopen("new.txt","x+");
fwrite($f," new");
fclose($f);*/


/*$f=fopen("new2.txt","x");
fwrite($f," to rgukt cse");
fclose($f);*/
?>