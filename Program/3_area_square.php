<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Area of Square</title>
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
    <h3> Enter the Value of Side to Calculate Area of Square </h3>
    <br>

        <form method="post">
            Enter the Value of Squre Side :  <input class="number" type="number" name="side" value="side" placeholder="Enter Side of Square" required />
            <br>
            <input type="submit" value="Submit" name="submit" />
        </form>   
        
    <?php

        if(isset($_POST["submit"]))
        {
            $side = $_POST["side"];
            $area = $side * $side;

            echo "<b>Area of Square is : ".$area."</b>";
        }


    ?>

    </center>
</body>
</html>