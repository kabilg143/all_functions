<?php

class animal{

    public function animal_function(){
        echo "animal make sound";
    }
}

class dog extends animal {

    public function dog_function(){
        echo "dog make sound bow bow";
    }
}

class cat extends animal{

    public function cat_function(){
        echo "cat make sound meow meow";
    }
}


$dog=new dog();

$dog->animal_function();
echo "<br>";
$dog->dog_function();

?>