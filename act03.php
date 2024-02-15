<?php include 'templates/nav.php';?>
<?php include 'templates/header.php';?>
<div class = "container">
<h1>Activity 3</h1>
<div class = "arith">
    <h2><strong>Arithmetic Operations</strong></h2>
    <p><strong>A.</strong> Write a PHP script to calculate the area of a rectangle using arithmetic operators. Display the result. 
        <em>(area of a rectangle: $area = $length * $width;)</em></p>
    <h2>Solution</h2>
    <p>$length = 10;<br>$width = 5;<br>$area = $length * $width;<br>echo "$area"</p>
    <?php
    $length = 10;
    $width = 5;
    $area = $length * $width;
    echo "<strong><br>Output</strong><br>Area of rectangle: $area"
    ?>

    <p><br><br><strong>B.</strong> Implement a script that converts currency from one denomination to another using arithmetic operators. Display the converted amount.
    <em>(Convert currency: $converted_amount = $amount * $conversion)</em></p>
    <h2>Solution</h2>
    <p>$amount = 10;<br>$conversion_rate = 56.21;<br>$converted_amount = $amount * $conversion_rate;<br>echo "Equivalent in dollar: $converted_amount";</p>
    <?php
    $amount = 10;
    $conversion_rate = 56.21;
    $converted_amount = $amount * $conversion_rate;
    echo "<strong><br>Output</strong><br>Equivalent in dollar: $converted_amount";
    ?>
    <hr>
</div>

<div class = "assign">
    <h2><strong>Assignment Operators</strong></h2>
    <p><strong>A.</strong> Track the progress of a fundraising campaign by updating the donation total dynamically using combined assignment operators.
    Display the updated total. <br><em>(Track fundraising: $total_donation += $new_donation)</em></p>
    <h2>Solution</h2>
    <p>$total_donation = 0;<br>$new_donation = 500;<br>$total_donation += $new_donation;<br>echo "Track fundraising: $total_donation"   </p>
    <?php
    $total_donation = 0;
    $new_donation = 500;
    $total_donation += $new_donation;
    echo "<strong><br>Output</strong><br>Track fundraising: $total_donation"
    ?>

    <p><br><br><strong>B.</strong> Implement a voting system where candidate votes are incremented based on user input. Display the final vote count for each candidate.
    <em>(Voting System: $candidate_votes +=$user_vote;)</em></p>
    <h2>Solution</h2>
    <p>$candidate_votes = 5;<br>$user_vote = 1;<br>$candidate_votes += $user_vote;<br>echo "$candidate_votes";</p>
    <?php
    $candidate_votes = 5;
    $user_vote = 1;
    $candidate_votes += $user_vote;
    echo "<strong><br>Output</strong><br>Voting system: $candidate_votes";
    ?>
</div>

<?php include 'templates/footer.php';?>