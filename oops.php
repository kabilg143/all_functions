<?php

class student{
    public $name,$roll_no;
    public function __construct($name,$roll_no){
        $this->name=$name;
        $this->roll_no=$roll_no;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_roll_no()
    {
        return $this->roll_no;
    }

    
}

$student_1=new student("kabil",001);
echo $student_1->get_name();
echo "<br>";
echo $student_1->get_roll_no();

?>