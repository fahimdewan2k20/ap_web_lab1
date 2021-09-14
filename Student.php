<?php
class Student {
  public $name;
  public $id;
  public $dob;
  public $courses = [];

  function ShowAllCourses() {
     foreach ($this->courses as $course) {
       echo $course . ", ";
     }
     echo "<br><br>";
  }

  function ShowInfo() {
    echo "Name: " . $this->name . "<br>";
    echo "ID: " . $this->id . "<br>";
    echo "Date of Birth: " . $this->dob . "<br>";
    echo "Courses: ";
    $this->ShowAllCourses();
  }

  function AddCourse($courseName) {
    // $this->courses[] = $courseName;
    array_push($this->courses, $courseName);
  }
}
?>
