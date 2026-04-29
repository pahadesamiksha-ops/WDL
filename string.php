<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>String Manipulation</title>

<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(135deg, #667eea, #764ba2);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        background: white;
        padding: 25px;
        border-radius: 12px;
        width: 350px;
        text-align: center;
        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }

    input {
        width: 90%;
        padding: 10px;
        margin-top: 10px;
        border-radius: 6px;
        border: 1px solid #ccc;
    }

    button {
        width: 100%;
        padding: 12px;
        margin-top: 15px;
        border: none;
        border-radius: 8px;
        background: linear-gradient(to right, #00c9ff, #92fe9d);
        font-weight: bold;
        cursor: pointer;
    }

    button:hover {
        transform: scale(1.05);
    }

    .output {
        margin-top: 15px;
        background: #f2f2f2;
        padding: 10px;
        border-radius: 6px;
        text-align: left;
    }
</style>

</head>

<body>

<div class="container">
    <h2>String Manipulation</h2>

    <form method="POST">
        <input type="text" name="text" placeholder="Enter a string" required>
        <button type="submit">Process</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $str = $_POST['text'];

    // String operations
    $length = strlen($str);
    $reverse = strrev($str);
    $substring = substr($str, 0, 5); // first 5 characters

    echo "<div class='output'>";
    echo "<b>Original:</b> $str <br>";
    echo "<b>Length:</b> $length <br>";
    echo "<b>Reversed:</b> $reverse <br>";
    echo "<b>Substring (first 5 chars):</b> $substring <br>";
    echo "</div>";
}
?>

</div>

</body>
</html>