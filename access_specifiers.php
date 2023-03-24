<?php

class parentclass {
  public $publicVar = "This variable is public.";
  protected $protectedVar = "This variable is protected.";
  private $privateVar = "This variable is private.";

  public function display_all_variables() {
    echo "Public variable: " . $this->publicVar . "<br>";
    echo "Protected variable: " . $this->protectedVar . "<br>";
    echo "Private variable: " . $this->privateVar . "<br>";
  }
 
  protected function protected_function(){
    echo "This is protected function"."<br>";
  }

}

class childclass extends parentclass{
     
    public function childclass_function(){

      $this->protected_function();
       echo $this->protectedVar."<br>";
    }

    
   



}

$obj1 = new parentclass();
echo $obj1->publicVar . "<br>"; 
echo $obj1->protectedVar; //error: Cannot access protected property outside the class

$obj2 = new childclass();

$obj2->childclass_function();

$obj1->display_all_variables(); 
?> 




