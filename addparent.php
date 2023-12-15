<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<?php
 
 
 
 $link = mysqli_connect("localhost", "root", "", "alphonsus school");
 // Check connection
 if ($link === false) {
     die("Connection failed: ");
 }
 
 

     $ParentID = $_POST['ParentID'];
     $ParentName= $_POST['ParentName'];
     $Address = $_POST['Address'];
     $Email = $_POST['Email'];
     $Phone = $_POST['Phone'];

 
     $sql = "INSERT INTO Parents (ParentID,ParentName,Address,Email,Phone) VALUES ('$ParentID','$ParentName','$Address','$Email','$Phone')";
     if (mysqli_query($link, $sql)) {
       echo "New record created successfully";
     } else {
       echo "Error adding record ";
     }
 

 
 ?>
 
<body>
 
 </body>
 </html>
 