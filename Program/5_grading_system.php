<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=4, initial-scale=1.0">
    <title>Know Your Grade</title>
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
        <h3> Enter Your Marks out of 100 to Know Your Grade </h3>
        <br>
        <form method="post">
            Enter Your Marks : <input class="number" type="number" name="mark" value="mark" max="100"
                placeholder="Enter Your Mark" required />
            <br>
            <input type="submit" name="submit" value="submit">
        </form>
        <?php

        if (isset($_POST["submit"])) 
        {
            $mark = $_POST["mark"];

            if ($mark >= 80) 
            {
                echo "<b>Congratulation, You've got A Grade.</b>";
            } elseif ($mark >= 70) {
                echo "<b>Congratulation, You've got B Grade.</b>";
            } elseif ($mark >= 60) {
                echo "<b>Congratulation, You've got C Grade.</b>";
            } elseif ($mark >= 35) {
                echo "<b>Congratulation, You've got D Grade.</b>";
            } else {
                echo "<b>You failed in this Exam. Work Hard.</b>";
            }
        }


        ?>

    </center>
</body>

</html>