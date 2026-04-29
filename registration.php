<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Project Competition Registration</title>

<style>
    body {
        font-family: Arial;
        background: linear-gradient(to right, #667eea, #764ba2);
        margin: 0;
    }

    .container {
        width: 400px;
        margin: 40px auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px black;
    }

    h2 {
        text-align: center;
    }

    input, select, textarea {
        width: 100%;
        padding: 8px;
        margin-top: 8px;
        border-radius: 5px;
        border: 1px solid gray;
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
        margin-top: 20px;
        padding: 10px;
        background: #f2f2f2;
        border-radius: 5px;
    }
</style>

</head>

<body>

<div class="container">

<h2>Project Registration</h2>

<form method="POST">

<input type="text" name="name" placeholder="Enter Name" required>
<input type="email" name="email" placeholder="Enter Email" required>
<input type="text" name="mobile" placeholder="Enter Mobile" required>

<select name="branch">
    <option>Computer</option>
    <option>IT</option>
    <option>Mechanical</option>
</select>

<input type="text" name="project" placeholder="Project Title" required>

<textarea name="description" placeholder="Project Description"></textarea>

<input type="date" name="date">

<button type="submit">Submit</button>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<div class='output'>";
    echo "<h3>Submitted Details:</h3>";

    echo "Name: " . $_POST['name'] . "<br>";
    echo "Email: " . $_POST['email'] . "<br>";
    echo "Mobile: " . $_POST['mobile'] . "<br>";
    echo "Branch: " . $_POST['branch'] . "<br>";
    echo "Project Title: " . $_POST['project'] . "<br>";
    echo "Description: " . $_POST['description'] . "<br>";
    echo "Date: " . $_POST['date'] . "<br>";

    echo "</div>";
}
?>

</div>

</body>
</html>