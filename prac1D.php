<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    Select Operation:
    <select name="operation">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    switch ($operation) {

        case "add":
            $result = $num1 + $num2;
            echo "Result = " . $result;
            break;

        case "sub":
            $result = $num1 - $num2;
            echo "Result = " . $result;
            break;

        case "mul":
            $result = $num1 * $num2;
            echo "Result = " . $result;
            break;

        case "div":
            if ($num2 != 0) {
                $result = $num1 / $num2;
                echo "Result = " . $result;
            } else {
                echo "Division impossible.";
            }
            break;

        default:
            echo "Invalid Operation";
    }
}
?>

</body>
</html>