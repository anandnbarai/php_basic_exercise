<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
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
        <h3> Enter a Number to Knwo whether the Number is Prime or Not!</h3>
        <br>
        <form method="post">

            Enter the Number : <input class="number" type="number" name="prime" value="prime"
                placeholder="Enter a Number" required />
            <br>
            <input type="submit" value="Submit" name="submit">
        </form>

        <?php

        if (isset($_POST["submit"]))
        {
            $nub = $_POST["prime"];
            function check_prime($nub)
            {
                if ($nub == 1)
                return 0;
                for ($i=2 ; $i <= $nub/2; $i++){
                    if ($nub % $i == 0)
                    return 0;
                }
                return 1;
            }
        
            $prime = check_prime($nub);
            if($prime == 1)
                echo "<b>$nub is prime number.</b>";
            else
                echo "<b>$nub is not prime number.</b>";
        }
    
        ?>
    </center>

</body>

</html>