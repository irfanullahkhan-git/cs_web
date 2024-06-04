<?php 
    echo "Hello World";
?>

<?php for($index = 0; $index < 5; $index++): ?>
    <h2>I am h2</h2>
<?php endfor;?>

<?php 
    // $var_1 = 100;
    // echo gettype($var_1);

    // $var_1 = "100";
    // echo gettype($var_1);

    // $var_1 = true;
    // echo gettype($var_1);

    // $var_1 = 'a';
    // echo gettype($var_1);

    // $var_1 = 23.5;
    // echo gettype($var_1);

    // $var_1 = [1,2,3,4,5];
    // echo gettype($var_1);

    // $var_1 = new stdClass();
    // $var_1->name = "Irfan";
    // $var_1->age = 78;
    // echo gettype($var_1);

    // $var_1 = NULL;
    // echo gettype($var_1);


// ------------------------------
    // $x = 5; // global scope

    // function myTest() {
    // // using x inside this function will generate an error
    // echo "<p>Variable x inside function is: $x</p>";
    // }
    // myTest();

    // echo "<p>Variable x outside function is: $x</p>";
// -----------------------------------------

function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();
  
// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";

// ----------------------------------------  



?>

