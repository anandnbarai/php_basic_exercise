<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Area of Triangle</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background-color: cadetblue;
        }
        .number {
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 10px;
			width: 20%;
			
        }
        input
        {
            border-radius: 5px;
            border: 1px solid #ccc; 
        }
    </style>
</head>

<body>
    <center>
    <br><br>
    <h3> Enter the Value of Base & Height to Calculate Area of Triangle </h3>
    <br>
        <form method="post">
            Enter Base of Triangle : <input class="number" type="number" name="base" placeholder="Enter Base of Triangle" required />
            <br>
            Enter Height of Triangle : <input class="number" type="number" name="height" placeholder="Enter Height of Triangle" required />
            <br>
            <input style="margin-top: 10px;" type="submit" name="submit" value="Submit" />
        </form>
        <?php

        if (isset($_POST["submit"])) 
        {
            $h = $_POST["height"];
            $b = $_POST["base"];
            $area = $h * $b / 2;
            echo "<b>Area of Triangle is : " . $area . "</b>";
        }

        ?>

    </center>

</body>

</html>