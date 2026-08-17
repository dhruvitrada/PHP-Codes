<!DOCTYPE html>
<html>
    <head>
        <title>PRAC3B</title>
    </head>
    <body>
        <?php
            function value($a)
            {
                $a++;
                echo"Inside Function: $a";
            }

            function reference(&$b)
            {
                $b++;
                echo"Inside Function: $b";
            }
        ?>
        <form method="post">
            Enter Value:
            <input type="number" name="num" >
            <input type="submit" value="Call by value" name="val">
            <input type="submit" value="Call by reference" name="ref">
        </form>
        <?php
                $num = $_POST["num"];

                if (isset($_POST["val"])) 
                {
                    echo "<h3>Call by Value:</h3>";
                    echo "<p>Before Function: $num</p>";
                    value($num);
                    echo "<p>After Function: $num</p>";
                } elseif (isset($_POST["ref"])) 
                {
                    echo "<h3>Call by Reference:</h3>";
                    echo "<p>Before Function: $num</p>";
                    reference($num);
                    echo "<p>After Function: $num</p>";
                }
        ?>
    </body>
</html>