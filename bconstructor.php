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
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}

$apple= new fruits("apple", "red");
$banana= new fruits("banana", "yelow");

    echo $apple->get_name();
    echo "<br>";
    echo $apple->get_color();
    echo "<br>";
    echo $banana->get_name();
    echo "<br>";
    echo $banana->get_color();
?>
</body>
</html>


//remove set_name() with __construct() method...