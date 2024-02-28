<?php include 'templates/nav.php';?>
<?php include 'templates/header.php';?>
<div class = "container">
    <div class = "arithmetic">
        <h1><strong>Activity 2</strong></h1>
        <h2><strong>Problem 1</strong></h2>
        <p>Write a program to print "Hello World" using echo only?<br>Conditions:<br></p>
        <ul>
            <li>You can not use any variable</li>
        </ul>
        <div class = "box">
            <h2><strong>Solution</strong></h2>
            <p>echo "Hello World"</p>
            <img src="assets/problem1.png" alt="">
            <?php
                echo '<br><strong>Output</strong>: Hello World ';
            ?>
        </div>

        <h2><strong><br><br>Problem 2</strong></h2>
        <p>Write a program to print "Hello PHP" using PHP variable?<br>Conditions: <br></p>
        <ul>
            <li>You can not use text directly in echo but can use variable.</li>
        </ul>
        <div class ="box">
            <h2><strong>Solution</strong></h2>
            <p>$greet = "Hello PHP"<br>echo "$greet</p>
            <img src="assets/problem2.png" alt="">
            <?php
                $greet = "Hello PHP";
                echo "<br><strong>Output</strong>: $greet";
            ?>
        </div>

        <h2><strong><br><br>Problem 3</strong></h2>
        <p>Write a program to print "Welcome to the PHP World" using somepart of the text in variable & some part directly in echo</p>
        <ul>
            <li>You have to use a variable that contains string "PHP World"</li>
        </ul>
        <div class ="box">
            <h2><Strong>Solution</Strong></h2>
            <p>$greet = "PHP World"<br>echo "Welcome to the $greet"</p>
            <img src="assets/problem3.png" alt="">
            <?php
            $greets = "PHP World";
            echo"<br><strong>Output</strong>: Welcome to the $greets"; 
        ?>
        </div>
    </div>
</div>
<?php include 'templates/footer.php';?>