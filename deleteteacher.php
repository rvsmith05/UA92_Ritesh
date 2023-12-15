<?php



$link = mysqli_connect("localhost", "root", "", "alphonsus school");

if ($link === false) {
    die("Connection failed: ");
}




  $StudentID = $_POST['TeacherID'];




    $sql = "DELETE from teachers WHERE TeacherID = '$TeacherID'";
    if (mysqli_query($link, $sql)) {
      echo "Record Deleted Successfully";
    } else {
      echo "Error in deleting record ";
    }
   

//}

?>