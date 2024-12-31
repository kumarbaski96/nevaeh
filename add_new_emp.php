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
$name = $_POST['name'];
$post = $_POST['role'];

// Image upload
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if the file is an image
$check = getimagesize($_FILES["image"]["tmp_name"]);
if ($check === false) {
    die("File is not an image.");
}

// Upload image
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $sql = "INSERT INTO team (name, role, img) VALUES ('$name', '$post', '$target_file')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully.";
        echo "<br><a href='index.php'>Go Back</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error uploading the file.";
}

$conn->close();
?>