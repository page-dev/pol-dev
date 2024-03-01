<?php include 'templates/nav.php';?>
<?php include 'templates/header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing Multiple Variables via URL</title>
</head>
<body>
    <div class ="container">
        <div class = "arithmetic">
                <h2><strong>Passing Variables on the URL</strong></h2>
                <p><strong>1.</strong> Create a simple form with two input fields for the user to enter two numbers performs arithmetic operations (addition, subtraction, multiplication,division)
                    on them. The form submits the data to a PHP script using the GET method.</p>
            
            <div class = "box">
                <h2><strong>Solution</strong></h2>
                <p>Variable Passing</p>
                <img src="assets/handler1.png" alt=""><br><br>
                <p>Variable Handling</p>
                <img src="assets/form1.png" alt=""><br><br>
                <a href="arithmeticOperations.php" class = "demo"><strong>Demo</strong></a><br><br>
            </div>
                <br><br><br><br>

                <p><strong>2.</strong> Create a simple form that allows to input a message and counts the number of words in it. The form submits the data to a PHP script using the GET method</p>
            <div class = "box">
                <h2><strong>Solution</strong></h2>
                <p>Variable Passing</p>
                <img src="assets/handler2.png" alt=""><br><br>
                <p>Variable Handling</p>
                <img src="assets/form2.png" alt=""><br><br>
                <a href="wordCount.php" class = "demo"><strong>Demo</strong></a>
            </div>
        </div>
    </div>
</body>
</html>
<?php include 'templates/footer.php';?>