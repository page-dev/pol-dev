<?php include 'templates/nav.php';?>
<?php include 'templates/header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtSh=device-width, initial-scale=1.0">
    <title>Passing Multiple Variables via URL</title>
</head>


<body>
    <div class = "container">
        <form method ="get" action = "handle_variables.php">
        <label for="num1">x: </label>
        <input type="number" id = "num1" name = "num1"><br><br>
        <label for="num2">y: </label>
        <input type="number" id = "num2" name = "num2"><br><br>
        <input type="submit" value = "Submit">
        </form>
    </div>
</body>


</html>
<?php include 'templates/footer.php';?>