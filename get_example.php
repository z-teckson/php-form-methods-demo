<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Method Example</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; }
        label { display: block; margin-top: 10px; }
        input[type="text"], input[type="email"] { width: 100%; padding: 8px; margin-top: 4px; }
        button { margin-top: 15px; padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .result { margin-top: 20px; padding: 15px; background-color: #f8f9fa; border-left: 4px solid #007bff; }
    </style>
</head>
<body>
    <div class="container">
        <h1>GET Method Form Example</h1>
        <p>This form uses the GET method. Submitted data will appear in the URL's query string.</p>
        <form method="GET" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
            
            <button type="submit">Submit via GET</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
            echo '<div class="result">';
            echo '<h3>Submitted Data (from $_GET superglobal):</h3>';
            echo '<p><strong>Name:</strong> ' . htmlspecialchars($_GET['name'] ?? '') . '</p>';
            echo '<p><strong>Email:</strong> ' . htmlspecialchars($_GET['email'] ?? '') . '</p>';
            echo '<p><strong>Current URL:</strong> ' . htmlspecialchars($_SERVER['REQUEST_URI']) . '</p>';
            echo '</div>';
        }
        ?>
        
        <div style="margin-top: 30px;">
            <p><strong>Note:</strong> The GET method appends form data to the URL in name‑value pairs. This is visible in the browser's address bar and may be bookmarked or shared.</p>
        </div>
    </div>
</body>
</html>