<?php 

include ('db_connect.php');

$sql = "SELECT * FROM messages ORDER BY submitted_at DESC";
$statement = $db->query($sql);
$submissions = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width-device-width, initial-scale=1.0">

        <title>Contact Form Submissions</title>

        <style>
            body {
                padding: 2rem;
                margin: 3rem auto;
                max-width: 800px;
                
                font-family: "Aileron", system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
                font-weight: 300;
            }

            h1 {
                color: #ad4e2b;
            }

            table {
                width: 100%;

                border-collapse: collapse;
            }

            th {
                background-color: #a8bbc7;
            }

            td {
                background-color: #eff6fa;
            }

            th, 
            td {
                padding: .25rem .5rem;
                
                border-top: 1px solid #446c87;
                border-bottom: 1px solid #446c87;

                text-align: left;
            }
        </style>
    </head>
    <body>
        <h1>Contact Form Submissions</h1>

        <table>
            <tr>
                <th>ID:</th>
                <th>First Name:</th>
                <th>Last Name:</th>
                <th>Email:</th>
                <th>Message:</th>
                <th>Submitted At:</th>
            </tr>

            <?php foreach($submissions as $row): ?>
            <tr>
                <td> <?php echo htmlspecialchars($row['id']); ?> </td>
                <td> <?php echo htmlspecialchars($row['firstname']); ?> </td>
                <td> <?php echo htmlspecialchars($row['lastname']); ?> </td>
                <td> <?php echo htmlspecialchars($row['email']); ?> </td>
                <td> <?php echo htmlspecialchars($row['message']); ?> </td>
                <td> <?php echo htmlspecialchars($row['submitted_at']); ?> </td>
            </tr>

            <?php endforeach; ?>
        </table>
    </body>
</html>