<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="post">
    Name:
    <input type="text" name="name" required><br><br>

    Password:
    <input type="password" name="pass" required><br><br>

    Email:
    <input type="email" name="email" required><br><br>

    PIN Code:
    <input type="text" name="pin" required><br><br>

    Mobile Number:
    <input type="tel" name="phone" required><br><br>

    <input type="submit" value="Register">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];
    $pin = $_POST["pin"];
    $mobile = $_POST["phone"];

    echo "<h2>Submitted Data</h2>";

    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>Name</td><td>$name</td></tr>";
    echo "<tr><td>Password</td><td>$pass</td></tr>";
    echo "<tr><td>Email</td><td>$email</td></tr>";
    echo "<tr><td>PIN Code</td><td>$pin</td></tr>";
    echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";
    echo "</table>";
}
?>

</body>
</html>