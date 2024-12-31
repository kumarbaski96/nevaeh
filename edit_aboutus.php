<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Post</title>
    <link rel="stylesheet" href="style.css">
    <style>

body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
}

.container {
    width: 100%;
    max-width: 500px;
    background: white;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin: 10px 0 5px;
}

input, textarea {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    padding: 12px;
    background: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background: #0056b3;
}
    </style>      
</head>
<body>
    <div class="container">
    
        <h2>Edit About Us</h2>
        <form action="add_aboutus.php" method="POST" enctype="multipart/form-data">
            <label for="name">Header:</label>
            <input type="text" name="header" required>
            
            <label for="post">Content:</label>
            <textarea name="content" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>