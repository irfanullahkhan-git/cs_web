<?php
// Operators
// Variables
// Condititions
// Loops
// function
// Forms
// Database


// Operators ( +, -, *, /, %)
$var_1 = 10;
$var_2 = 20;
$result = 0;

$result = $var_1 + $var_2;
echo "Addition: ".$result;

$result = $var_2 - $var_1;
echo "<br/>Subtraction: ".$result;

$result = $var_1 * $var_2;
echo "<br/>Multiplication: ".$result;

$result = $var_1 / $var_2;
echo "<br/>Division: ". $result;

$result = $var_1 % $var_2;
echo "<br/>Mod: ".$result; 

// Condititions
// if - else
$simple_var = 20;
if($simple_var > 50){
    echo "I am greater than 50";
}else{
    echo "I am not greater than 50";
}

$value = ($simple_var > 50) ? "I am greater than 50" :  "I am not greater than 50";
echo $value;


?>