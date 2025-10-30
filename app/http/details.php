<?php 
    include '../db.conn.php';
    session_start();
    $nickname=$_SESSION['nickname'];
	$location=$_SESSION['location'];
	$age=$_SESSION['age'];
	$gender=$_SESSION['gender'];
	$height=$_SESSION['height'];
	$body=$_SESSION['body'];
	$religion=$_SESSION['religion'];
	$zodiac_sign=$_SESSION['zodiac_sign'];
	$interest=$_SESSION['interest'];
	$idealtype=$_SESSION['idealtype'];
    $img1   =$_POST['img1'];
    $img2    =$_POST['img2'];
    $img3    =$_POST['img3'];
    $isLogin=true;

    $user_id = $_SESSION['user_id'];
    try {
        // Prepare the SQL UPDATE statement
        $sql = "UPDATE users
                SET
                    nickname = :nickname,
                    location = :location,
                    age = :age,
                    gender = :gender,
                    height = :height,
                    body = :body,
                    religion = :religion,
                    zodiac_sign = :zodiac_sign,
                    interest = :interest,
                    idealtype = :idealtype,
                    img1 = :img1,
                    img2 = :img2,
                    img3 = :img3,
                    isLogin=:isLogin
                WHERE
                    user_id = :user_id";
    
        $stmt = $conn->prepare($sql);
    
        // Bind parameters
        $stmt->bindParam(':nickname', $nickname);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':height', $height);
        $stmt->bindParam(':body', $body);
        $stmt->bindParam(':religion', $religion);
        $stmt->bindParam(':zodiac_sign', $zodiac_sign);
        $stmt->bindParam(':interest', $interest);
        $stmt->bindParam(':idealtype', $idealtype);
        $stmt->bindParam(':img1', $img1);
        $stmt->bindParam(':img2', $img2);
        $stmt->bindParam(':img3', $img3);
        $stmt->bindParam(':isLogin', $isLogin);
        $stmt->bindParam(':user_id', $user_id);
    
        // Execute the UPDATE statement
        $stmt->execute();
        header("Location: ../../preference/page1.php");
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>
