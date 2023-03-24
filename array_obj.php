<?php

class Employee {
    private $id;
    private $name;
    private $age;
    private $salary;

    public function __construct($id, $name, $age, $salary) {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function displayDetails() {
        echo "ID: " . $this->id . "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Salary: " . $this->salary . "<br>";
    }
}

class EmployeeList {
    private $employees = array();

    public function addEmployee(Employee $employee) {
        $this->employees[] = $employee;
        echo "Employee added successfully.<br>";
    }

    public function displayAllEmployees() {
        if (empty($this->employees)) {
            echo "No employees found.<br>";
        } else {
            foreach ($this->employees as $employee) {
                $employee->displayDetails();
                echo "<br>";
            }
        }
    }
}


$employeeList = new EmployeeList();

$employee1 = new Employee(1, "kabil", 25, 50000);
$employeeList->addEmployee($employee1);

$employee2 = new Employee(2, "sam", 30, 60000);
$employeeList->addEmployee($employee2);

$employeeList->displayAllEmployees();


?>
