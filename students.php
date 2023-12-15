<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
		<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #450201;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h3 {
            text-align: center;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #450201;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #b29d8d;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>

    </head>


<body> 


<?php

$link = mysqli_connect("localhost", "root", "", "alphonsus school");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Students</h3>
	
		<table>
		
			<tr>
				<th width="150px"><br>StudentID<hr></th>
				<th width="250px"><br>Student Name<hr></th>
                <th width="250px"><br>Address<hr></th>
                <th width="250px"><br>ClassID<hr></th>
			</tr>
				
			<?php
			 $sql = mysqli_query($link, "SELECT ClassID,StudentID,Address,StudentName FROM students");
    

			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
      
				<th>{$row['StudentID']}</th>
				<th>{$row['StudentName']}</th>
                <th>{$row['Address']}</th>
        <th>{$row['ClassID']}</th>





			</tr>";
			}
			?>
            </table>
        </body>
        </html>