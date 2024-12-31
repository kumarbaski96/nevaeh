<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data
$name = $_POST['header'];
$post = $_POST['content'];

//$sql = "INSERT INTO about (content_heading, content) VALUES ('$name', '$post')";
 $sql = "UPDATE about SET content_heading='$name', content='$post' WHERE id=1";    

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.";
    echo "<br><a href='header.php'>Go Back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Upload image

    


$conn->close();
?>