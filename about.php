<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
    <header>
        <div class="container">
        <?php
        // Connect to database
        $conn = new mysqli('localhost', 'root', '', 'web');
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT heading, content_heading, content, img FROM about WHERE id = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {   
                echo "<h1>" . $row['heading'] . "</h1>";?>
        </div>
    </header>

    <section class="about-section container">
        <div class="about-text">
        <?php echo "<h2>" . $row['content_heading'] . "</h2>";
            echo "<p>" . $row['content'] . "</p>";?>
        </div>
        <div class="about-image">
       <?php echo "<img src='" . $row['img'] . "' alt='About Us Image'>";
            }
    } else {
        echo "<p>Content not found</p>";
    }

    $conn->close();
    ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Your Company. All Rights Reserved.</p>
    </footer>
</body>
</html>
