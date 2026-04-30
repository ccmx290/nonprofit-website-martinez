<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $firstname = trim($_POST['firstname'] ?? '');
    $lastname = trim($_POST['lastname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Verifies that required fields are completed
    if(empty($firstname) || empty($lastname) || empty($email) || empty($message)) {
        die("Please complete all of the required fields.");
    }

    // Sanitizes data
    $firstname = strip_tags($firstname);
    $lastname = strip_tags($lastname);
    $email = strip_tags($email);
    $message = strip_tags($message);
    
    include('db_connect.php');

    $sql = "INSERT INTO messages (firstname, lastname, email, message) 
            VALUES (:firstname, :lastname, :email, :message)";

    $statement = $db->prepare($sql);

    $statement->execute([
        ':firstname' => $firstname,
        ':lastname' => $lastname,
        ':email' => $email,
        ':message' => $message
    ]);

    echo "Thank you, the form was submitted successfully.";
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