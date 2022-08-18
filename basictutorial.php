<?php
    //script goes here
    echo "hello & wellcome to simples learn" ;
    $str = "hello";
    $u="you";
    echo "<h1>" .$str."</h1>";
    echo "<h2>".$u."</h2>";

    //array
    //first method
    $laptop_brand=array("HP","ASUS","LENOVO","DELL");
    echo $laptop_brand[1];

    echo "<br>";
    echo "<br>";

    //second method
    define("laptops",["HP","ASUS","DELL"]);
    echo laptops[2];

    echo "<br>";
    echo "<br>";
    
    //php condition math

    //if statemant
    $var =1;
    if ($var>2){
        echo "hello";
    }else{
        echo "bye";
    }

    echo "<br>";
    echo "<br>";

    $num=10;
    if($num % 3==1 & $num % 5 ==0){
        echo "yesss!";
    }elseif($num %3 == 1){  //its doesnt execute because if is true!!!!
        echo "noooo!";
    }else{
        echo "die";
    }

    echo "<br>";
    echo "<br>";

    //switch statment

    $level=3;
    switch($level){
        case 1:
            echo "you are playing at easy level!";
        break;
        case 2:
            echo "you are playing at medium level!";
        break;
        case 3:
            echo "you are playing at hard level!";
        break;
        case 4:
            echo "you are playing at very hard level!";
        break;   
        default:
            echo "invalid input";               
    }

    echo "<br>";
    echo "<br>";

//php loops

// while   //do..while...  //for
    
//while
    $war=2;                 //without <br> last result will be 5
    while($war<= 5){    
        echo $war;
        $war++;
    }

    echo "<br>";
    echo "<br>";

    $jar=2;                 //with <br>
    while($jar<= 5){
        echo "$jar <br>";
        $jar++;
    }

    echo "<br>";
    echo "<br>";

    $jar=2;                 //if increment statment come before result in last step 5+1=6
    while($jar<= 5){
        $jar++;
        echo "$jar <br>";
    }

    echo "<br>";
    echo "<br>";


    //do... while..
    $kar=5;
    do{
        echo "$kar <br>";
        $kar++;
    }while($kar < 8);

    echo "<br>";
    echo "<br>";

    //for loop
    for($par=1;$par<5;$par++){
        echo "number: $par <br>";
    }

    echo "<br>";
    echo "<br>";

    //function
    function doloop(){   //for execute a function we just need to call the functions name...
        for($par=1;$par<5;$par++){
            echo "number: $par <br>";
        }
    }
    doloop();
    doloop();

    echo "<br>";
    echo "<br>";

    //oop php->object oriented php->it uses classes
    class fruits{    //define a class
        public $name;
        public $color;
    
        function set_name($name){   //call a local variable for a global and set it
            $this->name=$name;
        }
    
     
    }
    $apple = new fruits("apple","red");
    $banana = new fruits("banana","yelow");
    $apple->set_name("apple");
    $banana->set_name("banana");
    
        echo $apple->get_name();
        echo "<br>";
        echo $banana->get_name();
?>