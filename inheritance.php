<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<?php    
    class fruit {
        public $name;
        public $color;

        function __construct($name , $color){
            $this->name = $name;
            $this->color = $color;           
        }

        public function intro(){
            echo "A {$this->name} is a frtit with {$this->color} color.";
        }
    }
    class cherry extends fruit {
        public function message (){
            echo "attention <br>";
        }
    }
    $cherry= new cherry("cherry" , "red");
    $cherry->message();
    $cherry->intro();

    



?>
</body>
</html>