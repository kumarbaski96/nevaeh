<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="css/gallery.css">
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icon library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" integrity="sha384-He3RckdFB2wffiHOcESa3sf4Ida+ni/fw9SSzAcfY2EPnU1zkK/sLUzw2C5Tyuhj" crossorigin="anonymous">

    <title>TITLE_GOES_HERE</title>
  </head>
  <body>
    <div class="container">
      <div class="gallery">
        <?php
        $conn = new mysqli('localhost', 'root', '', 'web');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT img, name, post FROM team";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<img src="' . $row["img"] . '" alt="Employee Image">';
                echo '<h3>' . $row["name"] . '</h3>';
                echo '<p>' . $row["post"] . '</p>';
                echo '</div>';
            }
        } else {
            echo "<p>No employees found</p>";
        }
        $conn->close();
    ?>
    </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>