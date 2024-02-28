<?php include 'templates/nav.php';?>
<?php include 'templates/header.php';?>
<div class = "container">
<h1>Activity 3</h1>
<div class = "container">
<div class = "arith">
    <div class = "arith1">
        <div>
        <h2><strong>Arithmetic Operations</strong></h2>
        <p><strong>A.</strong> Write a PHP script to calculate the area of a rectangle using arithmetic operators. Display the result.<em>(area of a rectangle: $area = $length * $width;)</em></p>
        <h2><strong>Solution</strong></h2>
        <p>$length = 10;<br>$width = 5;<br>$area = $length * $width;<br>echo "$area"</p>

        <?php
        $length = 10;
        $width = 5;
        $area = $length * $width;
        echo "Area of rectangle: $area"
        ?>

    </div>
    </div>
</div>
    <p><br><br><strong>B.</strong> Implement a script that converts currency from one denomination to another using arithmetic operators. Display the converted amount.
    <em>(Convert currency: $converted_amount = $amount * $conversion)</em></p>
    <h2><strong>Solution</strong></h2>
    <p>$amount = 10;<br>$conversion_rate = 56.21;<br>$converted_amount = $amount * $conversion_rate;<br>echo "Equivalent in dollar: $converted_amount";</p>
    

    <?php
    $amount = 10;
    $conversion_rate = 56.21;
    $converted_amount = $amount * $conversion_rate;
    echo "Equivalent in dollar: $converted_amount";
    ?>

    
</div>

<div class = "assign">
    <!-- <div class = "assO1"><img src="assets/assO1.png" alt=""></div>
    <div class = "assO2"><img src="assets/assO2.png" alt=""></div> -->
    <h2><strong>Assignment Operators</strong></h2>
    <p><strong>A.</strong> Track the progress of a fundraising campaign by updating the donation total dynamically using combined assignment operators.
    Display the updated total. <br><em>(Track fundraising: $total_donation += $new_donation)</em></p>
    <h2><strong>Solution</strong></h2>
    <p>$total_donation = 0;<br>$new_donation = 500;<br>$total_donation += $new_donation;<br>echo "Track fundraising: $total_donation"   </p>
    
    
    <?php
    $total_donation = 0;
    $new_donation = 500;
    $total_donation += $new_donation;
    echo "Track fundraising: $total_donation"
    ?>


    <p><br><br><strong>B.</strong> Implement a voting system where candidate votes are incremented based on user input. Display the final vote count for each candidate.
    <em>(Voting System: $candidate_votes +=$user_vote;)</em></p>
    <h2><strong>Solution</strong></h2>
    <p>$candidate_votes = 5;<br>$user_vote = 1;<br>$candidate_votes += $user_vote;<br>echo "$candidate_votes";</p>
    

    <?php
    $candidate_votes = 5;
    $user_vote = 1;
    $candidate_votes += $user_vote;
    echo "Voting system: $candidate_votes";
    ?>


</div>
<div class = "Compare">
    <!-- <div class = "comp1"><img src="assets/comp1.png" alt=""></div>
    <div class = "comp2"><img src="assets/comp2.png" alt=""></div> -->
    <h2><strong>Comparison Operators</strong></h2>
    <p><br><br><strong>A.</strong> Compare the performance of two athletes in a race and determine the winner using 
    comparison operators. Display the result. <em>(Compare athlete times: Use '<' to compare times.)</em></p>
    <h2><strong>Solution</strong></h2>
    <p> $athlete1 = 6.70;<br>
        $athlete2 = 9.10;<br>
        $winner = ($athlete1>$athlete2)?"Athlete 1" : "Athlete 2";<br>
        echo "Winner: $winner";</p>

    <?php
        $athlete1 = 6.70;
        $athlete2 = 9.10;
        $winner = ($athlete1>$athlete2)?"Athlete 1" : "Athlete 2";
        echo "Winner: $winner";
    ?>

    <p><br><br><strong>B.</strong> Evaluate the efficiency of two algorithms based on their execution times using comparison 
operators. Display the more efficient algorithm. (Evaluate algorithm efficiency: Use '<' to 
compare times.)</p>
<h2><strong>Solution</strong></h2>
    <p> $algorithm1 = 40;<br>
        $algorithm2 = 20;<br>
        $fastAlgorithm = ($algorithm1 < $algorithm2) ? "Algorithm 1 is faster" : "Algorithm 2 is faster";<br>
        echo "$fastAlgorithm"; </p>


    <?php
        $algorithm1 = 40;
        $algorithm2 = 20;
        $fastAlgorithm = ($algorithm1 < $algorithm2) ? "Algorithm 1 is faster" : "Algorithm 2 is faster";
        echo "$fastAlgorithm"; 
    ?>


</div>
<div class = "Increment">\
    <!-- <div class = "inc1"><img src="assets/inc1.png" alt=""></div>
    <div class = "inc2"><img src="assets/inc2.png" alt=""></div> -->
    <h2><strong>Increment/Decrement Operations</strong></h2>
    <p><br><br><strong>A.</strong>  Calculate the factorial of a number using postfix increment/decrement operations. Display the 
factorial. <em>(Calculate factorial: Use a loop to multiply numbers.)</em></p>
<h2><strong>Solution</strong></h2>
    <p> $x = 4;<br>
        $factorial = 1;<br>
        for ($i = 1; $i <=$x; $i++){<br>
            $factorial *=$i;<br>
        } echo "$x! = $factorial";</p>


    <?php
        $x = 4;
        $factorial = 1;
        for ($i = 1; $i <=$x; $i++){
            $factorial *=$i;
        } echo "$x! = $factorial";
    ?>


    <p><br><br><strong>B.</strong>   Simulate the movement of a vehicle along a track using prefix increment/decrement 
    operations. Display the final position of the vehicle. <em>(Simulate vehicle movement: Use += for 
    forward movement.)</em></p>
    <h2><strong>Solution</strong></h2>
    <p> $position = 0; <br>
        $end = 50;<br>
        $position += $end;<br>
        echo"Final position of the vehicle is: $position";</p><br>


    <?php
        $position = 0;
        $end = 50;
        $position += $end;
        echo"Final position of the vehicle is: $position";
    ?>


</div>
<div>
    <!-- <div class = "lo1"><img src="assets/lo1.png" alt=""></div> -->
    <h2><strong>Logical Operations</strong></h2>
    <p><br><br><strong>A.</strong>    Determine eligibility for a discount based on purchase amount and customer loyalty using 
    logical operators. Display whether the customer is eligible for a discount. <em>(Determine discount 
    eligibility: Use && to check conditions.)</em></p>
    <h2><strong>Solution</strong></h2>
    <p> $amount = 290;<br>
        $membership = true; <br>
        $discount = ($amount > 200 && $membership) ? "Eligible for discount" : "Not eligible for discount";<br>
        echo "$discount";</p>


    <?php
        $amount = 290;
        $membership = true;
        $discount = ($amount > 200 && $membership) ? "Eligible for discount" : "Not eligible for discount";
        echo "$discount";
    ?>


    <p><br><br><strong>B.</strong>    Design a decision-making system for a chatbot to respond to user queries using logical 
operators. Display the appropriate response based on the query. <em>(Chatbot decision-making: Use ? 
: for simple conditions.)</em></p>
<h2><strong>Solution</strong></h2>
    <p> $query = "Good Morning";<br>
        $response = ($query == "Good Morning") ? "Good Morning" : "It's morning";<br>
        echo "$response";</p>


    <?php
        $query = "Good Morning";
        $response = ($query == "Good Morning") ? "Good Morning" : "It's morning";
        echo "$response";
    ?>


</div>

<?php include 'templates/footer.php';?>