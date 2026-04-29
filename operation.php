<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>String Operations</title>

<style>
    body {
        font-family: Arial;
        background: linear-gradient(to right, #667eea, #764ba2);
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
        width: 400px;
        text-align: center;
        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }

    input {
        width: 90%;
        padding: 10px;
        margin-top: 10px;
    }

    button {
        width: 100%;
        padding: 10px;
        margin-top: 15px;
        background: green;
        color: white;
        border: none;
        cursor: pointer;
    }

    .output {
        margin-top: 15px;
        background: #f2f2f2;
        padding: 10px;
        border-radius: 5px;
        text-align: left;
    }
</style>

</head>

<body>

<div class="container">
    <h2>String Operations</h2>

    <form method="POST">
        <input type="text" name="text" placeholder="Enter a string" required>
        <button type="submit">Process</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $str = $_POST['text'];

    // a) Uppercase
    $upper = strtoupper($str);

    // b) Lowercase
    $lower = strtolower($str);

    // c) First character uppercase
    $ucfirst = ucfirst($str);

    // d) First letter of each word uppercase
    $ucwords = ucwords($str);

    // e) Remove leading zeroes
    $noZero = ltrim($str, "0");

    // f) Reverse, length, substring
    $reverse = strrev($str);
    $length = strlen($str);
    $substring = substr($str, 0, 5);

    echo "<div class='output'>";
    echo "<b>Original:</b> $str <br><br>";

    echo "<b>Uppercase:</b> $upper <br>";
    echo "<b>Lowercase:</b> $lower <br>";
    echo "<b>First letter uppercase:</b> $ucfirst <br>";
    echo "<b>Each word capital:</b> $ucwords <br>";
    echo "<b>Without leading zeroes:</b> $noZero <br><br>";

    echo "<b>Reversed:</b> $reverse <br>";
    echo "<b>Length:</b> $length <br>";
    echo "<b>Substring (first 5 chars):</b> $substring <br>";

    echo "</div>";
}
?>

</div>

</body>
</html>