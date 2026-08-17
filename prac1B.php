<!DOCTYPE html>
<html>
<head>
    <title>Display Form Data in Another Form</title>
</head>
<body>

<h2>Input data</h2>
<form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    <input type="submit" value="submit">
</form>

<hr>

<?php
$name = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
}
?>

<h2>Output data</h2>
<form>
    Name: <input type="text" value="<?php echo $name; ?>"><br><br>
    Email: <input type="email" value="<?php echo $email; ?>"><br><br>
</form>

</body>
</html>