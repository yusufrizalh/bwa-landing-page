<?php
include "./connection.php";

if (!isset($_SESSION['email']) == 0) {
    header('Location: index.php');
}

if (isset($_POST['btnlogin'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        $selectAdmin = "SELECT * FROM admin WHERE 
            adm_email = :email AND adm_password = :password";
        $stmt = $dbconn->prepare($selectAdmin);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $jumlahAdmin = $stmt->rowCount();
        if ($jumlahAdmin >= 1) {    // jika ada admin
            $_SESSION['email'] = $email;
            header('Location: profileadmin.php');
            return;
        } else {
            echo "Cannot login!";
        }
    } catch (PDOException $ex) {
        echo "Error: " . $ex->getMessage();
    }
}
