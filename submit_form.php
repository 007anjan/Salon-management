<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $treatment = $_POST["treatment"];
    $date = $_POST["date"];
    $contact = $_POST["contact"];

    $sql = "INSERT INTO treatment (name, treatment_type, treatment_date, contact_number)
            VALUES ('$name', '$treatment', '$date', '$contact')";

    if ($conn->query($sql) === TRUE) {
        echo "Details have been entered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
