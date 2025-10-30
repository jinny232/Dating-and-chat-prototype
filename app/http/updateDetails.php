<?php
session_start();
include '../db.conn.php';

$user_id = $_SESSION['user_id'];
$name = $_POST['name'];
$username = $_POST['email'];
$age = $_POST['age'];
$location = $_POST['location'];

try {
    // Prepare the SQL UPDATE statement
    $sql = "UPDATE users
            SET
                name = :name,
                location = :location,
                age = :age,
                username = :username
            WHERE
                user_id = :user_id";

    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':location', $location);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':user_id', $user_id);

    $stmt->execute();

    header("Location: ../../test.php");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
