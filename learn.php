<html>
<?php
// 1.Variables (Data Storage)

$name = "Marvin"; //string
$age = 22; //integer
$isStudent = true; //boolean


// 2.Classes (Blueprints)

class Students{
    public $name; //property
    public $age; //property


    public function register (){ // method
        echo "Student register<br>";
    }
}

// Create an object and call the method
$student1 = new Students(); // create object
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
        if($amount > 0){
        $this->balance += $amount;
        }
    }
    public function getBalance(){
        return $this->balance;
    }
}

?>

<?php
// 5.Inheritance 

/*Inheritance allows one class to reuse and extend another class’s 
properties and methods.
- use{extends} keyword in php

- Child class inherits everything from parent, but 
can add or override */
class Person {
    public $name;

    public function greet(){
        echo "Hello, my name is $this->name<br>";
    }
}

class Student extends Person {
    public $studentId;

    public function showId(){
        echo "My student ID is $this->studentId<br>";

    }
}

$Person = new Student();
$Person->name = "Marvin";
$Person->studentId = "A-001";
$Person->greet();
$Person->showId();

?>

<?php
// Types of Variables (based on scope) 

/*1. Local Variable
Declared inside a function and can only 
be used within that function.*/

function test(){
    $x = 10;
    echo "$x<br>";
}
test();

?>

<?php
// 2. Global Variable

/*Declared outside a function and can be accessed 
inside a function using the global keyword.*/

$x = 20;
function show(){
    global $x;
    echo "$x<br>";
}
show();
?>

<?php
//3. Static Variable

/*Retains its value between function calls.*/

function counter(){
    static $count = 0;
    $count ++ ;
    echo $count;
}

counter(); // 1
?>

</html>