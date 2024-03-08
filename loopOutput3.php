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
        <div class = "arithmetic">
            <div class = "boxOutput">
                <a href="act5.php" class = "backButton"><img src="assets/back2.png" alt=""></a>
                <?php
                    if(isset($_GET["num"])){
                        $num = $_GET["num"];
                        $output = 0;
                        for($i = 1; $i<=$num;$i++){
                            $output+=$i;
                        }
                        echo"<h2><strong>User input: $num <br>Output: $output</strong></h2>";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php include 'templates/footer.php';?>