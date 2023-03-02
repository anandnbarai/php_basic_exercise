<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Even Number</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: cadetblue;
        }
    </style>
</head>

<body>
    <center>
        <br>
        <h3> List of Odd Number till 50 </h3>
        <br>
        <?php

        for ($i = 0; $i <= 50; $i++) {
            if ($i % 2 != 0) {
                echo $i . "<br>";
            }

        }

        ?>
    </center>
</body>

</html>