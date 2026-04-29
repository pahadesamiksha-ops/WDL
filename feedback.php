<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Feedback Form</title>

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
        width: 350px;
        text-align: center;
        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }

    input, textarea {
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
    <h2>Feedback Form</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Enter Name" required>
        <input type="email" name="email" placeholder="Enter Email" required>
        <textarea name="feedback" placeholder="Enter Feedback" required></textarea>

        <button type="submit">Submit</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    // Set timezone
    date_default_timezone_set("Asia/Kolkata");

    $date = date("d-m-Y");
    $time = date("h:i:s A");

    echo "<div class='output'>";
    echo "<h3>Feedback Submitted</h3>";
    echo "<b>Name:</b> $name <br>";
    echo "<b>Email:</b> $email <br>";
    echo "<b>Feedback:</b> $feedback <br><br>";

    echo "<b>Date:</b> $date <br>";
    echo "<b>Time:</b> $time <br>";
    echo "</div>";
}
?>

</div>

</body>
</html>