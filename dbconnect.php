<?php
$servername = "localhost";  
$username = "root";         
$password = "L@njue123";    
$dbname = "student"; // Assuming 'student' is your database name
$port = 3306;               

// Create connection
$conn = new mysqli($servername, $username, $password, $Student, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<h1>Connected successfully</h1>";

// Query to fetch data from the 'Class' table
$sql = "SELECT * FROM Class"; // 'Class' is your table name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Start HTML table
    echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>Class Name</th> <!-- Update this based on your actual column names -->
        <th>Description</th> <!-- Update this based on your actual column names -->
    </tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"] . "</td> <!-- Replace 'id' with your actual column name -->
        <td>" . $row["class_name"] . "</td> <!-- Replace 'class_name' with your actual column name -->
        <td>" . $row["description"] . "</td> <!-- Replace 'description' with your actual column name -->
        </tr>";
    }

    // End HTML table
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
