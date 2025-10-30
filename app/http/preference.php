<?php 
session_start();
include '../db.conn.php';
    $alcohol=$_SESSION['alcohol'];
    $smoking=$_SESSION['smoking'];
    $connection=$_SESSION['connection'];
    $interest_in=$_SESSION['interest_in'];
    $prefer_body=$_SESSION['prefer_body'];
    $prefer_height=$_SESSION['prefer_height'];
    $prefer_religion=$_POST['prefer_religion'];
    $prefer_zodiac_sign=$_POST['prefer_zodiac_sign'];
    $prefer_age=$_POST['prefer_age'];
    $prefer_location=$_POST['prefer_location'];
    
    $user_id = $_SESSION['user_id'];
    try {
        // Prepare the SQL UPDATE statement
        $sql = "UPDATE users
                SET
                    alcohol = :alcohol,
                    smoking = :smoking,
                    connection = :connection,
                    interest_in = :interest_in,
                    prefer_height = :prefer_height,
                    prefer_religion = :prefer_religion,
                    prefer_zodiac_sign = :prefer_zodiac_sign,
                    prefer_age = :prefer_age,
                    prefer_location = :prefer_location
                WHERE
                    user_id = :user_id";
    
        $stmt = $conn->prepare($sql);
    
        // Bind parameters
        $stmt->bindParam(':alcohol', $alcohol);
        $stmt->bindParam(':smoking', $smoking);
        $stmt->bindParam(':connection', $connection);
        $stmt->bindParam(':interest_in', $interest_in);
        $stmt->bindParam(':prefer_height', $prefer_height);
        $stmt->bindParam(':prefer_religion', $prefer_religion);
        $stmt->bindParam(':prefer_zodiac_sign', $prefer_zodiac_sign);
        $stmt->bindParam(':prefer_age', $prefer_age);
        $stmt->bindParam(':prefer_location', $prefer_location);
        $stmt->bindParam(':user_id', $user_id);
    
        $stmt->execute();
        header("Location: ../../index.php");
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>