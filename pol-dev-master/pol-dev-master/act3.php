<?php include 'templates/nav.php';?>
<?php include 'templates/header.php';?>
<div class = "container">
    <div class = "arithmetic">
            <h2><strong>Arithmetic Operations</strong></h2>
            <p><strong>Program A.</strong> Write a PHP script to calculate the area of a rectangle using arithmetic operators. Display the result.<em>(area of a rectangle: $area = $length * $width;)</em></p>
            <div class ="box">
                <h2><strong>Solution</strong></h2>
                <p>$length = 10;<br>$width = 5;<br>$area = $length * $width;<br>echo "$area"</p>
                <img src="assets/ao1.png" alt="">
                <?php
                    $length = 10;
                    $width = 5;
                    $area = $length * $width;
                    echo "<strong><br>Output</strong><br>Area of rectangle: $area"
                ?>
            </div>
            <p><br><br><br><br><strong>Program B.</strong> Implement a script that converts currency from one denomination to another using arithmetic operators. Display the converted amount.
            <em>(Convert currency: $converted_amount = $amount * $conversion)</em></p>
            <div class ="box">
                <h2><strong>Solution</strong></h2>
                <div>
                    <p>$amount = 10;<br>$conversion_rate = 56.21;<br>$converted_amount = $amount * $conversion_rate;<br>echo "Equivalent in dollar: $converted_amount";</p>
                </div>
                <img src="assets/ao2.png" alt="">

                <?php
                $amount = 10;
                $conversion_rate = 56.21;
                $converted_amount = $amount * $conversion_rate;
                echo "<strong><br>Output</strong><br>Equivalent in dollar: $converted_amount";
                ?>
            </div>
            <h2><strong><br><br><br>Assignment Operators</strong></h2>
            <p><strong>Program A.</strong> Track the progress of a fundraising campaign by updating the donation total dynamically using combined assignment operators.
            Display the updated total. <br><em>(Track fundraising: $total_donation += $new_donation)</em></p>
            <div class ="box">
                <h2><strong>Solution</strong></h2>
                <div>
                    <p>$total_donation = 0;<br>$new_donation = 500;<br>$total_donation += $new_donation;<br>echo "Track fundraising: $total_donation"   </p>
                </div>
                <img src="assets/assO1.png" alt="">

                <?php
                $total_donation = 0;
                $new_donation = 500;
                $total_donation += $new_donation;
                echo "<strong><br>Output</strong><br>Track fundraising: $total_donation"
                ?>
            </div>
            <p><br><br><strong><br><br>Program B.</strong> Implement a voting system where candidate votes are incremented based on user input. Display the final vote count for each candidate.
            <em>(Voting System: $candidate_votes +=$user_vote;)</em></p>
            <div class ="box">
                <h2><strong>Solution</strong></h2>
                <div>
                    <p>$candidate_votes = 5;<br>$user_vote = 1;<br>$candidate_votes += $user_vote;<br>echo "$candidate_votes";</p>
                </div>
                <img src="assets/assO2.png" alt="">

                <?php
                $candidate_votes = 5;
                $user_vote = 1;
                $candidate_votes += $user_vote;
                echo "<strong><br>Output</strong><br>Voting system: $candidate_votes";
                ?>
            </div>
            <h2><strong><br><br><br>Comparison Operators</strong></h2>
            <p><strong>Program A.</strong> Compare the performance of two athletes in a race and determine the winner using 
            comparison operators. Display the result. <em>(Compare athlete times: Use '<' to compare times.)</em></p>
            <div class ="box">
                <h2><strong>Solution</strong></h2>
                <div>
                <p> $athlete1 = 6.70;<br>
                    $athlete2 = 9.10;<br>
                    $winner = ($athlete1>$athlete2)?"Athlete 1" : "Athlete 2";<br>
                    echo "Winner: $winner";</p>
                    
                </div>
                <img src="assets/comp1.png" alt="">

                <?php
                    $athlete1 = 6.70;
                    $athlete2 = 9.10;
                    $winner = ($athlete1>$athlete2)?"Athlete 1" : "Athlete 2";
                    echo "<strong><br>Output:</strong><br> Winner: $winner";
                ?>
            </div>
                <p><br><br><strong><br><br>Program B.</strong> Evaluate the efficiency of two algorithms based on their execution times using comparison 
                operators. Display the more efficient algorithm. (Evaluate algorithm efficiency: Use '<' to 
                compare times.)</p>
                <div class ="box">
             
                    <h2><strong>Solution</strong></h2>

                
                    <p> $algorithm1 = 40;<br>
                        $algorithm2 = 20;<br>
                        $fastAlgorithm = ($algorithm1 < $algorithm2) ? "Algorithm 1 is faster" : "Algorithm 2 is faster";<br>
                        echo "$fastAlgorithm"; </p>

                    <img src="assets/comp2.png" alt="">

                        <?php
                            $algorithm1 = 40;
                            $algorithm2 = 20;
                            $fastAlgorithm = ($algorithm1 < $algorithm2) ? "Algorithm 1 is faster" : "Algorithm 2 is faster";
                            echo "<strong><br>Output:<br></strong>$fastAlgorithm"; 
                        ?>
                </div>
                <h2><strong><br><br><br>Increment/Decrement Operations</strong></h2>
                <p><strong>Program A.</strong>  Calculate the factorial of a number using postfix increment/decrement operations. Display the 
                factorial. <em>(Calculate factorial: Use a loop to multiply numbers.)</em></p>
                <div class ="box">
                    <h2><strong>Solution</strong></h2>
                    <div>
                        <p> $x = 4;<br>
                            $factorial = 1;<br>
                            for ($i = 1; $i <=$x; $i++){<br>
                                $factorial *=$i;<br>
                            } echo "$x! = $factorial";</p>
                    </div>
                    <img src="assets/inc1.png" alt="">
                    <?php
                        $x = 4;
                        $factorial = 1;
                        for ($i = 1; $i <=$x; $i++){
                            $factorial *=$i;
                        } echo "<strong><br>Output:<br></strong>$x! = $factorial";
                    ?>
                </div>
                <p><br><br><br><br><strong>Program B.</strong>   Simulate the movement of a vehicle along a track using prefix increment/decrement 
                operations. Display the final position of the vehicle. <em>(Simulate vehicle movement: Use += for 
                forward movement.)</em></p>
                <div class ="box">
                    <h2><strong>Solution</strong></h2>
                    <p> $position = 0; <br>
                        $end = 50;<br>
                        $position += $end;<br>
                        echo"Final position of the vehicle is: $position";</p>
                    <img src="assets/inc1.png" alt="">
                    <?php
                        $position = 0;
                        $end = 50;
                        $position += $end;
                        echo"<strong><br>Output:<br></strong>Final position of the vehicle is: $position";
                    ?>
                </div>
        <h2><strong><br><br><br>Logical Operations</strong></h2>
        <p><strong>Program A.</strong>    Determine eligibility for a discount based on purchase amount and customer loyalty using 
        logical operators. Display whether the customer is eligible for a discount. <em>(Determine discount 
        eligibility: Use && to check conditions.)</em></p>
            <div class ="box">
                <h2><strong>Solution</strong></h2>
                <p> $amount = 290;<br>
                    $membership = true; <br>
                    $discount = ($amount > 200 && $membership) ? "Eligible for discount" : "Not eligible for discount";<br>
                    echo "$discount";</p>
                <img src="assets/lo1.png" alt="">
                <?php
                    $amount = 290;
                    $membership = true;
                    $discount = ($amount > 200 && $membership) ? "Eligible for discount" : "Not eligible for discount";
                    echo "<strong><br>Output:<br></strong>$discount";
                ?>
            </div>
        <p><br><br><br><br><strong>Program B.</strong>    Design a decision-making system for a chatbot to respond to user queries using logical 
        operators. Display the appropriate response based on the query. <em>(Chatbot decision-making: Use ? 
        : for simple conditions.)</em></p>
        <div class ="box">
            <h2><strong>Solution</strong></h2>
            <p> $query = "Good Morning";<br>
                $response = ($query == "Good Morning") ? "Good Morning" : "It's morning";<br>
                echo "$response";</p>
            <img src="assets/lo2.png" alt="">
            <?php
                $query = "Good Morning";
                $response = ($query == "Good Morning") ? "Good Morning" : "It's morning";
                echo "<strong><br>Output:<br></strong>$response";
            ?>
        </div>
    </div>
</div>
<?php include 'templates/footer.php';?>