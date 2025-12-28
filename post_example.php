<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Method Example</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; }
        label { display: block; margin-top: 10px; }
        input[type="text"], input[type="email"] { width: 100%; padding: 8px; margin-top: 4px; }
        button { margin-top: 15px; padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .result { margin-top: 20px; padding: 15px; background-color: #f8f9fa; border-left: 4px solid #28a745; }
    </style>
</head>
<body>
    <div class="container">
        <h1>POST Method Form Example</h1>
        <p>This form uses the POST method. Submitted data is sent in the HTTP request body and is not visible in the URL.</p>
        <form method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
            
            <button type="submit">Submit via POST</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
            echo '<div class="result">';
            echo '<h3>Submitted Data (from $_POST superglobal):</h3>';
            echo '<p><strong>Name:</strong> ' . htmlspecialchars($_POST['name'] ?? '') . '</p>';
            echo '<p><strong>Email:</strong> ' . htmlspecialchars($_POST['email'] ?? '') . '</p>';
            echo '<p><strong>Data location:</strong> Sent in the HTTP request body (not visible in URL).</p>';
            echo '</div>';
        }
        ?>
        
        <div style="margin-top: 30px;">
            <p><strong>Note:</strong> The POST method sends form data inside the HTTP request body. This is more secure for sensitive data and does not have the same URL length limitations as GET.</p>
        </div>
    </div>
</body>
</html>