<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <?php
//oop php->object oriented php->it uses classes

class fruits{    //define a class
    public $name;
    public $color;

    function __construct($name , $color)
    {
        $this->name=$name;
        $this->color=$color;
    }
   
    function __destruct()
    {
        echo "the fruit is {$this->name} and the color is {$this->color}.<br>";
    }
}

$apple= new fruits("apple", "red");     //function call...
echo "<br>";                            //<br> doesnt work here...
$banana= new fruits("banana", "yelow"); //function call..

   
?>
</body>
</html>



//remove set_name with __construct() method and remove get_name with __destruct() method...