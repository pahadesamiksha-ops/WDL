<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Search Roll Number</title>

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
        width: 320px;
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

    .result {
        margin-top: 15px;
        font-weight: bold;
    }
</style>

</head>

<body>

<div class="container">
    <h2>Search Roll Number</h2>

    <form method="POST">
        <input type="number" name="roll" placeholder="Enter Roll Number" required>
        <button type="submit">Search</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Array of roll numbers
    $rolls = array(101, 102, 103, 104, 105);

    $search = $_POST['roll'];

    if (in_array($search, $rolls)) {
        echo "<div class='result' style='color:green;'>Roll Number Found!</div>";
    } else {
        echo "<div class='result' style='color:red;'>Roll Number Not Found!</div>";
    }
}
?>

</div>

</body>
</html>