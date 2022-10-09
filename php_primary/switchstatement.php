<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer Switch Stateemnt</title>
</head>
<body>
    <h1>Switch Statement</h1>

    <?php

        $grade = 'C';

        switch($grade){
            case 'A' :

                echo '<h1 style="color: green">YOU ARE SUPER STAR</h1>';
                break;
            case 'B' :
                echo '<h1 style="color: blue">YOU DID WELL</h1>';
                break;
            default:
                echo '<h1 style="color: red">YOU HAVE FAILED</h1>';
                break;

        }

    ?>
</body>
</html>