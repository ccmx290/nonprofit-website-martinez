<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PHP Greeting</title>

        <style>
            div {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);

                font-family: sans-serif;
                text-align: center;
                color: #ad4e2b;
            }

            h1 {
                font-size: 3em;
            }

            span {
                font-size: 1.5em;
            }
        </style>
    </head>
    <body>
        <?php 
            date_default_timezone_set("America/Chicago");

            $myName = "Ana";
            $welcome = "Welcome to my site!";

            echo "<div>";
                echo "<h1>Hi, I'm $myName. $welcome</h1>";
                
                echo "<span>";
                    echo "It is currently " . date('h:i A \o\n l F jS Y');
                echo "</span>";
            echo "</div>";
        ?>
    </body>
</html>