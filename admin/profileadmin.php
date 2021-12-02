<?php
include "./connection.php";

if (isset($_SESSION['email']) == 0) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>

<body>
    <h3>Welcome, <?php echo $_SESSION['email']; ?></h3>
    <p>Content</p>
    <br>
    <p><a href="./logout.php">Logout</a></p>
</body>

</html>