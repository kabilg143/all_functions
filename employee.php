<?php

class employee{
    public $name,$city,$employee_id,$salary,$extra_curricular_activities;

    public function set_details($name,$city,$salary,$employee_id,$extra_curricular_activities)
    {
         $this->name=$name;
         $this->city=$city;
         $this->salary=$salary;
         $this->employee_id=$employee_id;
         $this->extra_curricular_activities=$extra_curricular_activities; 
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_city()
    {
        return $this->city;
    }

    public function get_salary()
    {
        return $this->salary;
    }

    public function get_employee_id()
    {
        return $this->employee_id;
    }

    public function get_extra_curricular_activities()
    {
        return $this->extra_curricular_activities;
    }

    public function full_details()
    {
        echo $this->name;
        echo "<br>";
        echo $this->salary;
        echo "<br>";
        echo $this->city;
        echo "<br>";
        echo $this->employee_id;
        echo "<br>";
        echo $this->extra_curricular_activities;

    }
    


}

$employee1=new employee();
$employee2=new employee();
$employee3=new employee();
$employee4=new employee();
$employee5=new employee();

$employee1->set_details("kabil","ramnad",20000,1,"playing cricket");
$employee2->set_details("sam","madurai",21000,2,"dancing");
$employee3->set_details("pradeep","chennai",15000,3,"singing");
$employee4->set_details("hari","covai",25000,4,"drawing");
$employee5->set_details("peter","sivagangai",30000,5,"painting");

echo $employee1->get_name() ; 
echo "<br>";
echo $employee2->get_employee_id();
echo "<br>";
echo $employee4->full_details();



?>