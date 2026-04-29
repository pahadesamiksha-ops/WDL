<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Marks Calculation</title>

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

    input {
        width: 90%;
        padding: 8px;
        margin-top: 8px;
    }

    button {
        margin-top: 15px;
        padding: 10px;
        width: 100%;
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
    }
</style>

</head>

<body>

<div class="container">
    <h2>Marks Calculator</h2>

    <form method="POST">
        <input type="number" name="m1" placeholder="Subject 1" required>
        <input type="number" name="m2" placeholder="Subject 2" required>
        <input type="number" name="m3" placeholder="Subject 3" required>
        <input type="number" name="m4" placeholder="Subject 4" required>
        <input type="number" name="m5" placeholder="Subject 5" required>

        <button type="submit">Calculate</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Store marks in array
    $marks = array(
        $_POST['m1'],
        $_POST['m2'],
        $_POST['m3'],
        $_POST['m4'],
        $_POST['m5']
    );

    // Maximum marks
    $max = max($marks);

    // Total and percentage
    $total = array_sum($marks);
    $percentage = $total / count($marks);

    echo "<div class='output'>";
    echo "<b>Marks:</b> " . implode(", ", $marks) . "<br>";
    echo "<b>Maximum Marks:</b> $max <br>";
    echo "<b>Total:</b> $total <br>";
    echo "<b>Percentage:</b> " . number_format($percentage, 2) . "%";
    echo "</div>";
}
?>

</div>

</body>
</html>