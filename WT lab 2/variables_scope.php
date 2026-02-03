<?php
//data types
//integers
$age=19;
echo $age ."<br>";


//strings
$user_name="radha";
echo $user_name ."<br>";

//float
$rate=10.5;
echo $rate ."<br>";

//boolean
$user=true;
echo $user ."<br>";

//arrays
//indexed array
$a=array(1,2,3,4,5);
echo $a[1]."<br>";

//associative array
$b=array("hi"=>1,"hello"=>2);
echo $b["hi"]."<br>";



//variable scope
//local variables
function lv()
{
    $password="12345";
    echo $password ."<br>";
}
lv();

//global variables
$password="12345";
function gv()
{
   global $password;
    echo $password ."<br>";
}
gv();


$username="rani";
function g1v()
{
    $username="rani";
   global $username;
    
}
echo $username ."<br>";
g1v();

//static variables
function sv()
{
    static $ages=25;
    $ages++;
    echo $ages ."<br>";
}
sv();
sv();
sv();



?>