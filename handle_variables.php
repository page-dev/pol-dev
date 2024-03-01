<?php include 'templates/nav.php';?>
<?php include 'templates/header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handling Multiple Variables</title>
</head>
<body>

    <div class = "container">
        <?php
            if(isset($_GET['num1'])&& isset($_GET['num2'])){
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                //addition
                $add = $num1 + $num2;
                //subtraction
                $sub = $num1 - $num2;
                //multiplication
                $mult = $num1 * $num2;
                //division
                $divide = $num1 / $num2;
                echo "<p>Addition: $num1 + $num2 = $add</p>";
                echo "<p>Subtraction: $num1 - $num2 = $sub</p>";
                echo "<p>Multiplication: $num1 * $num2 = $mult</p>";
                echo "<p>Division: $num1 / $num2 = $divide</p>";
            } else{
                echo"<p>Missing variable name parameters. Variables 'name' and 'age' does not exist.</p>";
            }
        ?>
    </div>

</body>
</html>
<?php include 'templates/footer.php';?>