<!DOCTYPE html>
<html>
<head></head>
<body>
    <h3> user input</h3>
    <form method="post">
        username:<input type="text" name="username">
        <input type="submit" name="submit">
    </form>
    <?php
        $uname=$_POST["username"];

        $str="  Hi hello namaste";
        echo $str."<br>";
        echo $uname."<br>";

        echo "<h3>string functions</h3>";
        //string functions
        echo "<h3> basic string functions</h3>";
        //strlen
        echo "length: ".strlen($str)."<br>";
        //word count->str_word_count
        echo "word count: ".str_word_count($uname)."<br>";

        //reverse->strrev
        echo "reverse: ".strrev($uname)."<br>";


        echo "<h3>string conversions</h3>";
        //conversions
        echo "uppercase: ".strtoupper($str)."<br>";
        echo "lowercase: ".strtolower($str)."<br>";

        //first letter uppercase->ucfirst
        echo "first letter uppercase: ".ucfirst($str)."<br>";
        //first letter of each word upper->ucwords
        echo "first leeter of each word become uppercase: ".ucwords($str)."<br>";

        echo "<h3>string search and replace</h3>";
        //search and replace
        //position->strpos
        echo "position ".strpos($str,"hello")."<br>";
        echo "replace hello with Hello: ".str_replace("Hi","Hii",$str)."<br>";

        //substring and trimming
        echo "<h3>string substring and trimming</h3>";
        //substring->substr
        echo "substring: ".substr($str,2,6)."<br>";
        //trimming->trim
        echo "trim ".trim($str)."<br>";
        echo "ltrim ".ltrim($str)."<br>";
        echo "rtrim ".rtrim($str)."<br>";

        echo "<h3>string comparison</h3>";
        //string comparison
        //string comparison->strcmp
        echo "string comparison of str and uname: ".strcmp("hello","Hello")."<br>";
        echo "string comparison of str and uname: ".strcasecmp("hello","rani")."<br>";


        echo "<h3>special characters and security</h3>";
        echo "html specialchars:  ".htmlspecialchars("<b>hello</b>")."<br>";
        echo "addslashes ".addslashes("I'm learning php")."<br>";

        
        




    ?>

</body>
</html>
