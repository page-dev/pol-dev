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
            <h2><strong>Loops</strong></h2><br>
            <p><strong>1. </strong> Write a PHP script that will output the following loop:</p>
            <div class = "boxExample">
                <?php
                    $x = "* ";
                    for ($i = 0; $i<5; $i++){
                        echo"$x";
                        echo"<br>";
                        $x .="* ";
                    }
                ?>
            </div><br><br>
            <div class = "box">
                <h2><strong>Solution</strong></h2>
                <p>$x = "*";<br>for ($i = 0; $i&#60 5; $i++){<br>&emsp;echo"$x";<br>&emsp;echo"&#60br&#62";&emsp;<br>&emsp;$x .="* ";<br>}</p>
                <img src="assets/loopOutput1.png" alt="">
                <?php
                    echo "<strong>Output:</strong><br>";
                    $x = "* ";
                    for ($i = 0; $i<5; $i++){
                        echo"$x";
                        echo"<br>";
                        $x .="* ";
                    }
                ?>
            </div>
            <br><br><br><br>
            <p><strong>2. </strong> Write a PHP script that will output the following loop:</p>
            <div class = "boxExample">
                <?php
                    for ($i = 0; $i <= 5; $i++){
                        for($j = 0; $j < $i; $j++){
                            echo "* ";
                        }echo"<br>";
                    }
                    for ($i = 5; $i >= 0; $i--){
                        for($j = 0; $j<$i; $j++){
                            echo "* ";
                        }echo "<br>";
                    }
                ?>
            </div><br><br>
            <div class = "box">
                <h2><strong>Solution</strong></h2>
                <p>for ($i = 0; $i <= 5; $i++){<br>&emsp;for($j = 0; $j < $i; $j++){<br>&emsp;&emsp;echo "* ";<br>&emsp;}echo"&#60br&#62";<br>}<br>for ($i = 5; $i >= 0; $i--){
                    <br>&emsp;for($j = 0; $j<$i; $j++){<br>&emsp;&emsp;echo "* ";<br>&emsp;}echo "&#60br&#62";<br>}</p>
                <img src="assets/loopOutput2.png" alt="">
                <?php
                    echo "<strong>Output:</strong>";
                    for ($i = 0; $i <= 5; $i++){
                        for($j = 0; $j < $i; $j++){
                            echo "* ";
                        }echo"<br>";
                    }
                    for ($i = 5; $i >= 0; $i--){
                        for($j = 0; $j<$i; $j++){
                            echo "* ";
                        }echo "<br>";
                    }
                ?>
            </div>
            <br><br><br><br>
            <p><strong>3. </strong> Create a script using a <strong>for loop</strong> to add all the integers between 0 and 10 and display the total.
                the range should be user inputted.</p>
            <div class = "box">
                <h2><strong>Solution</strong></h2>
                <p>if(isset($_GET["num"])){<br>&emsp;$num = $_GET["num"];<br>&emsp;$output = 0;<br>&emsp;for($i = 1; $i<=$num;$i++){<br>&emsp;&emsp;$output+=$i;<br>&emsp;}
                    <br>&emsp;echo"$output";<br>}</p>
                <img src="assets/loop3.png" alt=""><br><br>
                <div class = "inputNum">
                    <form action="loopOutput3.php" method = "get">
                        <label for="num">Input</label>
                        <input type="number" id = "nums" name = "num">
                        <strong><input type="submit" value = "add" id = "subButton"></strong>
                    </form>
                </div>
            </div>
            <br><br>
            <p><strong>4. </strong> Write a PHP script that creates the following table (use for loops).</p>
            <div class = "boxExample">
                <img src="assets/loopOutput4.png" alt="">
            </div>
            <br><br>
            <div class = "box">
                <h2><strong>Solution</strong></h2>
                <p>echo "&#60table class = 'numTable'&#62";<br>
                        &emsp;for($i=1;$i<=10;$i++){<br>
                            &emsp;&emsp;echo "&#60tr&#62";<br>
                            &emsp;&emsp;for($j=$i;$j<=$i*10;$j+=$i){<br>
                                &emsp;&emsp;&emsp;echo"&#60td&#62&#60strong&#62$j&#60/strong&#62&#60/td&#62";<br>
                            &emsp;&emsp;}echo "&#60/tr&#62&#60br&#62";<br>
                            &emsp;}echo"&#60/table&#62";
                <img src="assets/loop4.png" alt=""><br><br>
                <?php
                    echo "<strong>Output:</strong>";
                    echo "<table class = 'numTable'>";
                        for($i=1;$i<=10;$i++){
                            echo "<tr>";
                            for($j=$i;$j<=$i*10;$j+=$i){
                                echo"<td><strong>$j</strong></td>";
                            }echo "</tr><br>";
                        }echo"</table>";
                ?>
            </div>
            <br><br><br><br>
        </div>
    </div>
</body>
</html>
<?php include 'templates/footer.php';?>