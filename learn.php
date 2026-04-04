<?php
// Variables (Data Storage)

$name = "Marvin"; //string
$age = 22; //integer
$isStudent = true; //boolean

?>

<?php
// Classes (Blueprints)

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