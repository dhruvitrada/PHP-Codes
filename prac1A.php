<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAC 1A</title>
</head>
<body>
    <h2> Student Form</h2>
    <form method="post">
        Name : <input type="text" name="name"> <br><br>
        Email : <input type="email" name="email"><br><br>
        Age : <input type="number" name="age"><br><br>
        <input type="submit" value="submit" > 
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $name=$_POST["name"];
            $email=$_POST["email"];
            $age=$_POST["age"];

            echo"<h2> Recieved data</h2>";
            echo"Name : ".$name."<br>";
            echo "Email : ".$email."<br>";
            echo "Age : ".$age."<br>";
        }
    ?>
</body>
</html>