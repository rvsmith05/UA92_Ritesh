<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
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
     $TeacherName= $_POST['TeacherName'];
     $Salary = $_POST['Salary'];
     $Email = $_POST['Email'];
     $subject = $_POST['subject'];
 /*
 Step 3  executes the Insert query on the database
 */
     $sql = "INSERT INTO teachers (TeacherID,TeacherName,Salary,Email,subject) VALUES ('$TeacherID','$TeacherName','$Salary','$Email','$subject')";
     if (mysqli_query($link, $sql)) {
       echo "New record created successfully";
     } else {
       echo "Error adding record ";
     }
 
 //}
 
 ?>
 
<body>
 
 </body>
 </html>
 