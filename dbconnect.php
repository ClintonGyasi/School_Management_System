<?php
$servername = "localhost"; // MySQL server hostname or IP
$username = "root";        // MySQL username
$password = "L@njue123";   // MySQL password
$dbname = "your_database_name"; // Database name
$port = 3306;              // MySQL port (default is 3306)

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Example query to check database connection (only if the database and table exist)
$sql = "SELECT * FROM your_table_name"; // Replace 'your_table_name' with your actual table name

// Check if the database exists and is accessible
if ($conn->select_db($dbname)) {
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["name"] . "<br>"; // Adjust column names as needed
        }
    } else {
        echo "0 results or query failed";
    }
} else {
    echo "Database does not exist or is not accessible.";
}

// Close the connection
$conn->close();
?>
