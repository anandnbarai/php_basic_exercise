<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compound Interest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: cadetblue;
        }

        .number {
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            width: 20%;

        }

        input {
            border-radius: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <center>
        <br><br>
        <h3> Enter the Principal Amount, Rate of Interest & Time Period to Calculate Compound Interest. </h3>
        <br>
        <form method="post">

            Enter Principal Amount : <input class="number" type="number" value="pa" name="pa"
                placeholder="Enter Principal Ampunt" required />
            <br>
            Enter Rate of Interest : <input class="number" type="number" value="int" name="int"
                placeholder="Enter Rate of Interest" required />
            <br>
            Enter Time Period : <input class="number" type="number" value="tp" name="tp" placeholder="Enter Time Period"
                required />
            <br>
            <input type="submit" value="Submit" name="submit">
        </form>
        <?php

        if (isset($_POST["submit"])) {
            $pa = $_POST["pa"];
            $int = $_POST["int"];
            $tp = $_POST["tp"];
            $ci = ($pa * pow(1 + ($int / 100), $tp)) - $pa;

            // by using below function you can fix decimal value in output, 2 means you'll see only two number after decimal.
        
            $formatted_ci = number_format($ci, 2);

            echo "<b>Your Compunded Interest after" . " " . $tp . " year is " . $formatted_ci . "</b>";
        }


        ?>

    </center>
</body>

</html>