function asking_age(age)
{
    if(age>18)
        console.log("your are above 18");
    else
        console.log("your are not above 18");
}

asking_age(16);

var asking_age1=function(age){
    if(age>18)
        console.log("your are above 18");
    else
        console.log("your are not above 18");
}

asking_age1(20);

var asking_age2=(age)=>
{
    if(age>18)
        console.log("your are above 18");
    else
        console.log("your are not above 18");
}
asking_age2(30);