<?php
// Define number here
$number = -4;

// Check positive or negative
if ($number > 0) {
    $sign = "Positive";
} elseif ($number < 0) {
    $sign = "Negative";
} else {
    $sign = "Zero";
}

// Check even or odd
if ($number % 2 == 0) {
    $parity = "Even";
} else {
    $parity = "Odd";
}

// result
if ($number == 0) {
    echo "The number 0 is neither Positive nor Negative but Even.";
} else {
    echo "The number $number is $sign and $parity.";
}
?>
