<?php
$conn=new mysqli("localhost","root","","userdb");

if(!$conn)
    {
        die("connected failed");

    }
 
$email=$_POST['email'];
$password=$_POST['password'];

//$sql="select * from userinfo where email='$email'";

//$result=$conn->query($sql);
//if($result->num_rows==1){
    //$row=$result->fetch_assoc();
    //if(password_verify($password,$row['password'])){
        //echo "login successfull";
        //echo "welcome," . $row['username'];
    
    //}
    //else{
        //echo "incorrect password";
    //}
//}
   // else{
        //echo "email not registered";
    //}



$storedemail="radha@gmail.com";
$storedpswd="12345";

if(strcmp($email,$storedemail)!=0){
    die("invalid email");
}

if(strcmp($password,$storedpswd)!=0){
    die("invalid password");
}

echo "login successfully";

$conn->close();
?>