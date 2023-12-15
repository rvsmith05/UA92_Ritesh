<?php

//Step 1 check the connection ....

$link = mysqli_connect("localhost", "root", "", "alphonsus school");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


/*
Step 2 create the PHP variables for the html form  ....
*/
//if (isset($_POST['submit'])) {

  $TeacherID = $_POST['TeacherID'];
  $TeacherName = $_POST['TeacherName'];
  $subject = $_POST['subject'];
  $Salary = $_POST['Salary'];
  $Email = $_POST['Email'];


/*
Step 3  executes the Insert query on the database
*/
$sql = "UPDATE teachers SET TeacherName= '$TeacherName', subject= '$subject', Salary= '$Salary', Email= '$Email'
WHERE TeacherID= '$TeacherID'";
    if (mysqli_query($link, $sql)) {
      echo "Update successfully";
    } else {
      echo "Error adding record ";
    }

//}

?>