<?php

require('db_connect.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];


if (isset($_POST['submitBtn'])) {
    echo "Submitted.";
}

if (isset($_POST['firstname']) && isset($_POST['lastname']) 
&& isset($_POST['email']) && isset($_POST['message'])) {
    echo $firstname;
    echo $lastname;
    echo $email;
    echo $message;
}

?>