<?php
// 1. Connect to the Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Delete Action
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql_delete = "DELETE FROM team WHERE id='$delete_id'";
    if ($conn->query($sql_delete) === TRUE) {
        echo "<p>Record deleted successfully</p>";
    } else {
        echo "<p>Error deleting record: " . $conn->error . "</p>";
    }
}

// 2. Fetch Data from Table
$sql = "SELECT * FROM team";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            width: 100px;
            height: auto;
            border-radius: 8px;
        }
        @media (max-width: 600px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }
            th {
                display: none;
            }
            tr {
                margin-bottom: 10px;
                border: 1px solid #ddd;
            }
            td {
                display: flex;
                justify-content: space-between;
                padding: 10px;
            }
            td::before {
                content: attr(data-label);
                font-weight: bold;
                text-transform: uppercase;
            }
        }
    </style>
</head>
<body>
<?php include 'header.php';?>
    <h1>Posts</h1>
    <table>
        <thead>
            <tr>
                 <th>Id</th>
                <th>Name</th>
                <th>Role</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // 3. Loop through and display results
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td data-label='Name'>" . htmlspecialchars($row['id']) . "</td>";
                    echo "<td data-label='Name'>" . htmlspecialchars($row['name']) . "</td>";
                    echo "<td data-label='Name'>" . htmlspecialchars($row['role']) . "</td>";
                    echo "<td data-label='Image'><img src='" . htmlspecialchars($row['img']) . "' alt='Post Image'></td>";
                    echo "<td data-label='Actions'>";
                    echo "<a href='update_emp.php?id=" . $row['id'] . "'>Update</a> | ";
                    echo "<a href='?delete_id=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No posts found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    // 4. Close the connection
    $conn->close();
    ?>
</body>
</html>
