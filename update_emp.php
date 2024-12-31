<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update record
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $post = $_POST['role'];

    $sql_update = "UPDATE team SET name='$name', role='$post' WHERE id=$id";
    //echo "<script>alert('Data updated successfully!');</script>";

    if ($conn->query($sql_update) === TRUE) {
        
        
        header("Location: show_team.php");
        //echo "<p>Record updated successfully</p>";
    } else {
        echo "<p>Error updating record: " . $conn->error . "</p>";
    }
}

// Fetch record by ID
$id = isset($_GET['id']) ? $_GET['id'] : 1; // Default to 1 if no ID is provided
$sql = "SELECT * FROM team WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Post</title>
    <style>
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label, input, textarea, button {
            display: block;
            width: 100%;
            margin-bottom: 15px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<?php include 'header.php';?>
    <h1>Update Employee Post</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>

        <label for="post">Post:</label>
        <textarea name="role" required><?php echo htmlspecialchars($row['role']); ?></textarea>

        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
