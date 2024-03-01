<?php include 'templates/nav.php';?>
<?php include 'templates/header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <div class = "container">
        <?php
            if (isset($_GET['message'])){
                $message = $_GET['message'];
                echo "The message has ". str_word_count($message) ." words";
            }
        ?>
    </div>
</body>


</html>
<?php include 'templates/footer.php';?>