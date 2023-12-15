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

  $ClassID = $_POST['ClassID'];
  $ClassName = $_POST['ClassName'];
  $Capacity = $_POST['Capacity'];

/*
Step 3  executes the Insert query on the database
*/
$sql = "UPDATE classes SET ClassName= '$ClassName', Capacity= '$Capacity'
WHERE ClassID= '$ClassID'";
    if (mysqli_query($link, $sql)) {
      echo "Update successfully";
    } else {
      echo "Error adding record ";
    }

//}

?>