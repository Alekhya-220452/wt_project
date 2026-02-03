<?php


$conn=new mysqli("localhost","root","","userdb");

if(!$conn)
    {
        die("connected failed");

    }

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

//$hashed=password_hash($password,PASSWORD_DEFAULT);

//$sql="insert into userinfo(username,email,password)
    //values('$username','$email','$hashed')";

//if($conn->query($sql)===true){
    //echo "registartion successful";
//}  
//else{
    //echo "insert failed";
//}

$username=trim($username);
$email=trim($email);

echo $email;
echo "uppercase: ".strtoupper($username)."<br>";

if(strlen($username)<5){
    die("username  must be at least 5 charcters");

}

if(strlen($password)<6){
    die("password  must be at least 6 charcters");
    
}

$conn->close();


?>