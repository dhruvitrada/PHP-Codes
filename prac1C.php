<!DOCTYPE html>
<html>
<head>
    <title>Factorial of a Number</title>
</head>
<body>

<h2>Factorial</h2>

<form method="post">
    Enter Number:
    <input type="number" name="num" required><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    $fact = 1;

    for ($i = 1; $i <= $num; $i++) {
        $fact = $fact * $i;
    }

    echo "<h3>Factorial of $num is $fact</h3>";
}
?>

</body>
</html>