<?php
session_start();
    # database connection file
    include '../db.conn.php';

    # Getting User data data
    $user_id = $_SESSION['user_id'];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $comPassword = $_POST['confirmPassword'];

    $stmt = $conn->prepare("SELECT * FROM users where user_id = $user_id");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $password = $results[0]['password'];

    if($password === $oldPassword){
        if($newPassword === $comPassword){
            $sql = "UPDATE users
            SET
                password = :newPassword
            WHERE
                user_id = :user_id";

        $stmt = $conn->prepare($sql);

    // Bind parameters
        $stmt->bindParam(':newPassword', $newPassword);
        $stmt->bindParam(':user_id', $user_id);
 
        $stmt->execute();

        $success = "Update Ok";
        header("Location: ../../test.php?success=$success");
        exit;   
        }else{
            $em = "Dont Match new password and comfirm password";
            header("Location: ../../test.php?error=$em");
            exit;
        }
    }else{
        $em = "Invalid old password";
        header("Location: ../../test.php?error=$em");
        exit;
    }   
?>