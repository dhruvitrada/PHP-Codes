<!DOCTYPE html>
<html>
<head>
    <title>Swap Two Numbers</title>
</head>
<body>

<h2>Swap Two Numbers</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    <input type="submit" value="Swap">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    echo "<h3>Before Swapping</h3>";
    echo "First Number = " . $num1 . "<br>";
    echo "Second Number = " . $num2 . "<br><br>";

    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;

    echo "<h3>After Swapping</h3>";
    echo "First Number = " . $num1 . "<br>";
    echo "Second Number = " . $num2;
}
?>

</body>
</html>