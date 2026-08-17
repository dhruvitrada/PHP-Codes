<!DOCTYPE html>
<html>
<head>
    <title>Number Pyramid</title>
</head>
<body>

<h2>Number Pyramid</h2>

<form method="post">
    Enter Number of Rows:
    <input type="number" name="rows" required><br><br>
    <input type="submit" value="Display">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $rows = $_POST["rows"];

    echo "<pre>";

    for ($i = 1; $i <= $rows; $i++) {     

        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }

        echo "\n";
    }

    echo "</pre>";
}
?>

</body>
</html>