<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Age Checker</title>
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
        <h3>Enter Your Age to check Voting Eligibility for upcoming Election</h3>
        <form method="post">
            Enter Your Age : <input class="number" type="number" name="age" value="age" placeholder="Enter Your Age" required />
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        

        if(isset($_POST["submit"]))
        {
            $age = $_POST["age"];
            if($age>18)
            {
                echo "<b>You are eligible for Voting.</b>";
            }
            else
            {
                echo "<b>You are not eligible for Voting.</b>";
            }
        }
        ?>

    </center>
</body>
</html>