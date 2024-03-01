<?php include 'templates/nav.php';?>
<?php include 'templates/header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Count</title>
</head>
<body>
    <div class = "container">
        <form action="handle_message.php" method="get">
        <label for="message">message: </label>
        <input type="text" name="message" id="message">
        <input type="submit" value = "submit">
        </form>
    </div>
</body>
</html>
<?php include 'templates/footer.php';?>