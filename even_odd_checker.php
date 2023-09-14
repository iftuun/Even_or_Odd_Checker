<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <h2>Even or Odd Checker</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        // Check if the number is even or odd
        $result = ($number % 2 == 0) ? "Even" : "Odd";

        echo "<p>The number $number is $result.</p>";
    }
    ?>
</body>
</html>
