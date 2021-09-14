<?php
require "Car.php";
require "Student.php";

$student1 = new Student();
$student2 = new Student();

$student1->name = "Fahim";
$student1->id = "18-38049-2";
$student1->dob = "27/01/1998";

// echo "Student 1 info: <br>";
// $student1->ShowInfo();
$student1->AddCourse("Physics");
$student1->AddCourse("Chemistry");
echo "<b>Student 1 info: </b><br>";
$student1->ShowInfo();

$student2->name = "Dewan";
$student2->id = "19-38140-2";
$student2->dob = "20/11/1999";

echo "<b>Student 2 info: </b><br>";
$student2->ShowInfo();

$car1 = new Car("235D", "Prado", "Sakib");
$car2 = new Car("D524", "Corolla", "Hasib");

echo "<b>Car 1 info: </b><br>";
$car1->ShowInfo();
echo "<b>Car 2 info: </b><br>";
$car2->ShowInfo();
?>
