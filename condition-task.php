<?php
// 1st question
$x = 0;
if ($x == 1) {
    if ($x >= 0) {
        print "First Answer= true";
    } else {
        print "First Answer= false";
    }
}

// second question
$x = 40;
$y = 20;
if ($x == $y) {
    echo "Second Answer= 1";
} elseif ($x > $y) {
    echo "Second Answer= 2";
} else {
    echo "Second Answer= 3";
}

// Thirsd Question
$color="red";
switch ($color) 
{
    case "blue":
    echo "Hello";
    break;

    case "yellow":
    echo "W3docs";
    break;   
    default: 
    echo "Third Answer= None";
}
?>