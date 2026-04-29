<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(135deg, #667eea, #764ba2);
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        background: white;
        padding: 30px;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        width: 350px;
    }

    h1 {
        color: #333;
    }

    p {
        font-size: 18px;
        margin-top: 10px;
        color: #555;
    }
</style>

</head>

<body>

<div class="card">

    <h1>Welcome to Dashboard</h1>

    <?php
        // Set timezone (important)
        date_default_timezone_set("Asia/Kolkata");

        $date = date("d-m-Y");
        $time = date("h:i:s A");

        echo "<p>Today's Date: $date</p>";
        echo "<p>Current Time: $time</p>";

    ?>

</div>

</body>
</html>