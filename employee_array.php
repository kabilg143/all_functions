<?php

class Employee{

    public $name,$id,$city,$salary;

    public function __construct($name,$id,$city,$salary)
    {
        $this->name=$name;
        $this->id=$id;
        $this->city=$city;
        $this->salary=$salary;
    }

    
}

$person=array();

$person[]=new Employee("kabil",1,"ramnad",20000);
$person[]=new Employee("sam",2,"madurai",22000);
$person[]=new Employee("peter",3,"sivagangai",25000);
$person[]=new Employee("pradeep",1,"madurai",30000);


foreach($person as $person)
{
    echo "<br> $person->name"." ";
    echo $person->id." ";
    echo $person->city." ";
    echo $person->salary." ";
}


?>