<?php
$score = 0;
echo "-------- Welcome To Quiz App --------\n";

// Question 1
echo "What is the capital of France?\n";
echo "(a) Berlin\n";
echo "(b) Madrid\n";
echo "(c) Paris\n";
echo "Your Answer: ";
$answer = trim(fgets(STDIN));
if ($answer == "c") {
    echo "CORRECT ANSWER\n";
    $score++;
} else {
    echo "WRONG ANSWER! CORRECT ANSWER IS PARIS\n";
}

// Question 2
echo "What is the capital of Bangladesh?\n";
echo "(a) Dhaka\n";
echo "(b) Rajshahi\n";
echo "(c) Sylhet\n";
echo "Your Answer: ";
$answer = trim(fgets(STDIN));
if ($answer == "a") {
    echo "CORRECT ANSWER\n";
    $score++;
} else {
    echo "WRONG ANSWER! CORRECT ANSWER IS DHAKA\n";
}

// Question 3
echo "What is the currency of Bangladesh?\n";
echo "(a) Taka\n";
echo "(b) Dollar\n";
echo "(c) Pound\n";
echo "Your Answer: ";
$answer = trim(fgets(STDIN));
if ($answer == "a") {
    echo "CORRECT ANSWER\n";
    $score++;
} else {
    echo "WRONG ANSWER! CORRECT ANSWER IS TAKA\n";
}
echo "\n-------- Quiz End --------\n";
echo "Your Score is $score out of 3\n";
?>
