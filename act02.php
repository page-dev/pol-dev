<?php include 'templates/nav.php';?>
<?php include 'templates/header.php';?>
<div class = "container">
<div class = "problem1">

    <h1><strong>Activity 2</strong></h1>
    <h2><strong>Problem 1</strong></h2>
    <p>Write a program to print "Hello World" using echo only?<br>Conditions:<br></p>
    <ul>
        <li>You can not use any variable</li>
    </ul>
    <h2>Solution</h2>
    <p>echo "Hello World"</p>
    <?php
    echo '<br><strong>Output</strong>: Hello World ';
    ?>
    <hr>
</div>

<div class = "problem2">
    <h2><strong>Problem 2</strong></h2>
    <p>Write a program to print "Hello PHP" using PHP variable?<br>Conditions: <br></p>
    <ul>
        <li>You can not use text directly in echo but can use variable.</li>
    </ul>
    <h2>Solution</h2>
    <p>$greet = "Hello PHP"<br>echo "$greet</p>
    <?php
    $greet = "Hello PHP";
    echo "<br><strong>Output</strong>: $greet";
   ?>
   <hr>
</div>

<div class = "problem3">
    <h2><strong>Problem 3</strong></h2>
    <p>Write a program to print "Welcome to the PHP World" using somepart of the text in variable & some part directly in echo</p>
    <ul>
        <li>You have to use a variable that contains string "PHP World"</li>
    </ul>
    <h2>Solution</h2>
    <p>$greet = "PHP World"<br>echo "Welcome to the $greet"</p>
    <?php
    $greets = "PHP World";
    echo"<br><strong>Output</strong>: Welcome to the $greets"; 
    ?>
<?php include 'templates/footer.php';?>