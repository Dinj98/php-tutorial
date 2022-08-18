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
        public $weight;
        public function __construct($name, $color , $weight){
            $this->name=$name;
            $this->color=$color;
            $this->weight=$weight;
        }
        public function intro(){
            echo "this fruit is {$this->name} , the color is {$this->color},and the weight is {$this->weight} gram.";
        }
    }

    $cherry = new cherry("cherry", "pink",20);
    $cherry ->intro();
?>
</body>
</html>