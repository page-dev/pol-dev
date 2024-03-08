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


    <?php
        echo "<table class = 'numTable'>";
            for($i=1;$i<=10;$i++){
                echo "<tr>";
                for($j=$i;$j<=$i*10;$j+=$i){
                    echo"<td><strong>$j</strong></td>";
                }echo "</tr><br>";
            }echo"</table>";
    ?>


</body>
</html>
<?php include 'templates/footer.php';?>