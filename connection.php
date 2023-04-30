<?php
// connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "hotels_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// retrieve the search query from the form input
$search_query = $_POST['search_query'];

// construct the SQL query to search for hotels
$sql = "SELECT * FROM hotels WHERE name LIKE '%$search_query%' OR location LIKE '%$search_query%'";

// execute the SQL query
$result = $conn->query($sql);

// display the search results
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p>" . $row["name"] . " - " . $row["location"] . " - " . $row["price"] . "</p>";
    }
} else {
    echo "No results found";
}

// close the database connection
$conn->close();
?>