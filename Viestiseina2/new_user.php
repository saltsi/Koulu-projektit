<?php
session_start();

include_once 'config/db_pdo.php';


if ($_POST['passwd'] != $_POST['passwd2']) {
    echo "Salasanat eivät täsmää";
    die();
}

$stmt = $conn->prepare("INSERT INTO users (etunimi, sukunimi, email, salasana)
                        VALUES (:firstname, :lastname, :email, :passwd)");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':passwd', $passwd);


$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);;
$email = trim($_POST['email']);


$passwd = trim($_POST['passwd']);
$passwd = password_hash($passwd, PASSWORD_DEFAULT);


if ($stmt->execute()) {
    echo "Kayttäja lisatty";
} else {
    echo "Kayttäjää ei lisatty";
}