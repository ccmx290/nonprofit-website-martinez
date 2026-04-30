<?php

require('db_connect_sample.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    echo "The form was submitted.";
}
else {
    echo "Nothing was submitted.";
    exit();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width-device-width, initial-scale=1.0">

        <title>Form Submission</title>
    </head>
    <body>
        <h1>Form Submission</h1>

        <div>
            <p><span>First Name:</span> <?php echo htmlspecialchars($firstname); ?> </p>
            <p><span>Last Name:</span> <?php echo htmlspecialchars($lastname); ?> </p>
            <p><span>Email:</span> <?php echo htmlspecialchars($email); ?> </p>
            <p><span>Message:</span> <?php echo htmlspecialchars($message); ?> </p>
        </div>
    </body>
</html>