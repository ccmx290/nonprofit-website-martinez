<?php

include('db_connect.php');

$query = "SELECT * FROM messages"; 
$statement = $db->prepare($query);
$statement->execute();

echo '<p>This is a test!</p>';

?>