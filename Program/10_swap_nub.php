<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Check</title>
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
        <h3> Enter Two Number & Swap their Value </h3>
        <br>
        <form method="post">

            Enter First Number : <input class="number" type="number" value="nub1" name="nub1" placeholder="Enter Fisrt Number"
                required />
            <br>
            Enter Second Number : <input class="number" type="number" value="nub2" name="nub2" placeholder="Enter Second Number"
                required />
            <br>
            <input type="submit" name="submit" value="Submit" />
        </form>
    

    <?php

    if (isset($_POST["submit"])) 
    {
        $nub1 = $_POST["nub1"];
        $nub2 = $_POST["nub2"];
        
        if ($nub1 > $nub2)
        {
            $c = $nub1 - $nub2;
            $nub1 = $nub1 - $c;
            $nub2 = $nub1 + $c;

            echo "<b>After Swapping Fisrt Number is : ".$nub1." & "."Second Number is : ".$nub2."</b>";
        }
        else
        {
            $c = $nub2 - $nub1;
            $nub2 = $nub2 - $c;
            $nub1 = $nub2 + $c;

            echo "<b>After Swapping First Number is : ".$nub1." & "."Second Number is : ".$nub2."</b>";
        }

       
    }

    ?>
    </center>
</body>

</html>