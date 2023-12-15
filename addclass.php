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
 
     $ClassID = $_POST['ClassID'];
     $ClassName= $_POST['ClassName'];
     $Capacity = $_POST['Capacity'];
     
 /*
 Step 3  executes the Insert query on the database
 */
     $sql = "INSERT INTO classes (ClassID,ClassName,Capacity) VALUES ('$ClassID','$ClassName','$Capacity')";
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
 