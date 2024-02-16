<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
    <?php include 'templates/nav.php';?>
    <?php include 'templates/header.php';?>
</head>
<body class = "portBody">

    <?php
        //Set variables for information
        //personal info
        $name = "Paul Julius D. Labrador";
        $age = "20 Years Old";
        $birth = "August 7, 2003";
        $address = "Sugarland, Valencia City, Bukidnon";
        $hobby = "walking";

        //educational background
        $elem = "<strong>Elementary</strong>: Valencia City Central School - (2010-2016)";
        $sec = "<strong>Secondary</strong>: Central Mindanao University Laboratory High School - (2016-2022)";
        $tert = "<strong>Tertiary</strong>: Central Mindanao University - (2022-present)";

        //email
        
        $email = "s.labrador.pauljulius@cmu.edu.ph";
        
        //skill
        
        $skill1 = "<strong>- Python</strong>";
        $skill2 = '<strong>- Java</strong>';
        
        //aesthetic elements
        
        $vertLine = "<div class = 'vert'></div>";
        $shadow = "<div id = 'shadow'></div>";
        $box1 = "<div id = 'rect'></div>";
        $box2 = "<div id = 'rect2'></div>";
        
        //personal information
        
        echo "<div class = 'allDiv'>
        <div id = 'details'>
            <h1 class = 'pers'>Personal Information</h1>
            <p><strong>Name</strong>: $name</p>
            <p><strong>Age</strong>: $age</p>
            <p><strong>Date of Birth</strong> $birth</p>
            <p><strong>Address</strong>: $address</p>
            <p><strong>Hobby</strong>: $hobby</p>
            <h1 class = 'educ'>Educational Background</h1>
            <ul>
                <li>$elem</li>
                <li>$sec</li>
                <li>$tert</li>
            </ul>
            <h1 class = 'skill'>Programming Skills</h1>
            <ul class = 'unlist'>
                <li class = 'skillD'>$skill1</li>
                <li class = 'skillD'>$skill2</li>
            </ul>
            <h2 id ='ref'>Reference</h2>
            <h3>Ma. Liliana Labrador</h3>
            <p><strong>Relationship</strong>: Mother</p>
            <p><strong>Contact Num</strong>: 09265018149
            <div id = 'about'><h4>About:</><br><span id ='desc'><h5>Ma. Liliana Labrador is my mother who have helped me countless times. She is the wife of Cresencio Labrador, my father. She currently resides in $address.</h5></span></div>
        </div>
        </div>";

        //box information
       
        echo " $shadow
        $vertLine
        <div id = 'rect'>
            <div id = 'rect2'>
                <div class = 'dp'><img src='assets/dp2.png' alt='' width='250'></div>
                <div id = 'dpName'><h3><strong>$name</strong></h3></div>
                <div id = 'dpInfo1'>Email<br><br><br>Contact num<br><br><br>Occupation</div>
                <div id = 'email'><p>$email</p></div>
                <div id = 'num'><p>09512580881</p></div>
                <div id = 'occ'><p>Student</p></div>
            </div>
        </div>";
    ?>
</body>
<?php include 'templates/footer.php';?>
</html>