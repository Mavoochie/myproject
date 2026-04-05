<?php
// 1.Variables (Data Storage)

$name = "Marvin"; //string
$age = 22; //integer
$isStudent = true; //boolean

?>

<?php
// 2.Classes (Blueprints)

class Student{
    public $name; //property
    public $age; //property


    public function register (){ // method
        echo "Student register";
    }
}

// Create an object and call the method
$student1 = new Student(); // create object
$student1->name = "Marvin";
$student1->age = 22;
$student1->register(); // Output: Student register

?>

<?php
// 3.Functions and methods

// function($name){
//     return "Hello, $name";
// }

class Calculator {
    public function add($a, $b){
        return $a + $b;
    }
}

?>

<?php
// 4.Encapsulation 

class BankAccount {
    private $balance = 0;

    public function deposit($amount){
        if($amount > 0);{
        $this->balance += $amount;
        }
    }
    public function getBalance(){
        return $this->balance;
    }
}

?>