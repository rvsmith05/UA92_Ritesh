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

  $ParentID = $_POST['ParentID'];
  $ParentName = $_POST['ParentName'];
  $Address = $_POST['Address'];
  $Email = $_POST['Email'];
  $Phone = $_POST['Phone'];
  


/*
Step 3  executes the Insert query on the database
*/
$sql = "UPDATE parents SET ParentName= '$ParentName', Address= '$Address', Email= '$Email', Phone= '$Phone'
WHERE ParentID= '$ParentID'";
    if (mysqli_query($link, $sql)) {
      echo "Update successfully";
    } else {
      echo "Error adding record ";
    }

//}

?>