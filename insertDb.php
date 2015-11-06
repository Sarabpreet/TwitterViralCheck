<?php 


									$servername = "localhost";
									$username = "root";
									$password = "root";
									$dbname = "bigdata";
									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);

									// Check connection
									if ($conn->connect_error) {
									    die("Connection failed: " . $conn->connect_error);
									}

									// $sql="INSERT INTO game VALUES ('', $score, now(),'','$victim')";

									// if (mysqli_query($conn, $sql)) {
									//     echo "New record created successfully";
									// } else {
									//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
									// }
									mysqli_close($conn);
 ?>