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

  $StudentID = $_POST['StudentID'];
  $StudentName = $_POST['StudentName'];
  $Address = $_POST['Address'];

/*
Step 3  executes the Insert query on the database
*/
$sql = "UPDATE students SET StudentName= '$StudentName', Address= '$Address'
WHERE StudentID= '$StudentID'";
    if (mysqli_query($link, $sql)) {
      echo "Update successfully";
    } else {
      echo "Error adding record ";
    }

//}

?>