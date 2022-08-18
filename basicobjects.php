<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
    <?php
//oop php->object oriented php->it uses classes

use fruits as GlobalFruits;

class fruits{    //define a class
    public $name;
    public $color;

    function set_name($name){   //call a local variable for a global and set it
        $this->name=$name;
    }

    function get_name(){
        return $this->name;   //get... and set... are methods
    }
}
$apple = new fruits("apple","red");
$banana = new fruits("banana","yewlow");
$apple->set_name("apple");
$banana->set_name("banana");

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
?>
</body>
</html>