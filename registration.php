<?php


$conn=new mysqli("localhost","root","","userdb");

if(!$conn)
    {
        die("connected failed");

    }

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$hashed=password_hash($password,PASSWORD_DEFAULT);

$sql="insert into userinfo(username,email,password)
    values('$username','$email','$hashed')";

if($conn->query($sql)===true){
    echo "registartion successful";
}  
else{
    echo "insert failed";
}
$conn->close();
?>