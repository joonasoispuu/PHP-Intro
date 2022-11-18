<!DOCTYPE html>
<html>
    <head>
        <title>PHP webpage</title>
    </head>
    <body>
        <h1>Next part will be in PHP</h1>

        <?php
            //text output
            echo "Hello world!<br>";
            echo "This is the second line.";
            $color = "red";
            echo "My car is $color.<br>";

            $txt = "Lets do some maths";
            $x = 5;
            $y = 10.5;

            echo $txt;
            echo "<br>";
            echo $x . "<br>" . $y . "<br>";
            echo $x + $y;

            function multiply(){
                // Same as if $y = $y * $x;
                $GLOBALS["y"] = $GLOBALS ["y"] * $GLOBALS["x"];
            }
            multiply();
            echo "<br>$y"
        ?>
    </body>
</html>