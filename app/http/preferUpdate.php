<?php
session_start();
include '../db.conn.php';

$user_id = $_SESSION['user_id'];
$prefer_religion = $_POST['prefer_religion'];
$prefer_zodiac_sign = $_POST['prefer_zodiac_sign'];
$prefer_age = $_POST['prefer_age'];
$prefer_location = $_POST['prefer_location'];

$sql = "UPDATE users
SET
prefer_religion = :prefer_religion,
prefer_zodiac_sign= :prefer_zodiac_sign,
prefer_age = :prefer_age,
prefer_location = :prefer_location
WHERE
    user_id = :user_id";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bindParam(':prefer_religion', $prefer_religion);
$stmt->bindParam(':prefer_zodiac_sign', $prefer_zodiac_sign);
$stmt->bindParam(':prefer_age', $prefer_age);
$stmt->bindParam(':prefer_location', $prefer_location);
$stmt->bindParam(':user_id', $user_id);

$stmt->execute();

header("Location: ../../test.php");

?>