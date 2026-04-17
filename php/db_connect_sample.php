<?php

    // Uses placeholder credentials & dbname
    $dsn = 'mysql:host=localhost;dbname=contact_form';
    $username = 'nameforuser';
    $password = 'pwforuser';

    try {
        $db = new PDO ($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo '<p>You are connected to the database!</p>';
        return $db;
    } catch (PDOException $e) {
        echo '<p>Connection failed. An error has ocurred.</p>';
        exit();
    }

?>