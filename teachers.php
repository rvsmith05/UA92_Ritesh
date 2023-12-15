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

<h3>See all Teachers</h3>
	
		<table>
		
			<tr>
				<th width="150px"><br>TeacherID<hr></th>
				<th width="250px"><br>Teacher Name<hr></th>
                <th width="250px"><br>Subject<hr></th>
                <th width="250px"><br>Salary<hr></th>
				<th width="250px"><br>Email<hr></th>
				
			</tr>
				
			<?php
			 $sql = mysqli_query($link, "SELECT TeacherID,TeacherName,subject,Salary,Email FROM teachers");
    

			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
      
				<th>{$row['TeacherID']}</th>
				<th>{$row['TeacherName']}</th>
                <th>{$row['subject']}</th>
                <th>{$row['Salary']}</th>
        <th>{$row['Email']}</th>



			</tr>";
			}
			?>
            </table>
        </body>
        </html>