<?php
// echo var_dump($_POST);
$submit_data = $_POST;
$errors = [];

if(empty($submit_data["user_name"])){
    $errors[] = "Name is Required.";
}

if(empty($submit_data["email"])){
    $errors[] = "Email is Required.";
}
if(empty($submit_data["password"])){
    $errors[] = "Password is Required.";
}

if(count($errors) > 0){
    echo "The following information are missing. Please provide these info.<br/>";
    echo implode("<br/>", $errors);
    return ;
}


echo "i am still here";

?>