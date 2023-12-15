<?php



$link = mysqli_connect("localhost", "root", "", "alphonsus school");

if ($link === false) {
    die("Connection failed: ");
}



  $ParentID = $_POST['ParentID'];



    $sql = "DELETE from parents WHERE ParentID = '$ParentID'";
    if (mysqli_query($link, $sql)) {
      echo "Record Deleted Successfully";
    } else {
      echo "Error in deleting record ";
    }
   

//}

?>