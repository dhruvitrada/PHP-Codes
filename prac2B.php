<!DOCTYPE html>
<html>
<head>
    <title>Library Student Form</title>
</head>
<body>


<h2>Library Student Form</h2>

<form method="post">
    Name:
    <input type="text" name="name">
    <span style="color:red"><?php echo $nameErr; ?></span>
    <br><br>

    ID:
    <input type="text" name="id">
    <span style="color:red"><?php echo $idErr; ?></span>
    <br><br>

    Email:
    <input type="email" name="email">
    <span style="color:red"><?php echo $emailErr; ?></span>
    <br><br>

    Phone:
    <input type="tel" name="phone">
    <span style="color:red"><?php echo $phoneErr; ?></span>
    <br><br>

    <input type="submit" value="Submit">
</form>

<?php
$nameErr = $idErr = $emailErr = $phoneErr = "";
$name = $id = $email = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"]))
        $nameErr = "Name is required";
    else
        $name = $_POST["name"];

    if (empty($_POST["id"]))
        $idErr = "ID is required";
    else
        $id = $_POST["id"];

    if (empty($_POST["email"]))
        $emailErr = "Email is required";
    else
        $email = $_POST["email"];

    if (empty($_POST["phone"]))
        $phoneErr = "Phone is required";
    else
        $phone = $_POST["phone"];

    if ($nameErr == "" && $idErr == "" && $emailErr == "" && $phoneErr == "") {
        echo "<h3>Student Details</h3>";
        echo "Name: $name <br>";
        echo "ID: $id <br>";
        echo "Email: $email <br>";
        echo "Phone: $phone";
    }
}
?>
</body>
</html>