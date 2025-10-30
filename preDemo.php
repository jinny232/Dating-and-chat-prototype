<?php
    include 'header.php';
    include 'app/db.conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .pre-container{
            width: 70%;
            height:400px;
            margin-left: 200px;
            display: flex;
            justify-content: center;
            margin-top: 150px;
        }
        .pre-thum{
            width: 100%;
            height: 100%;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color:#fff ;
        }
        .pre-child{
            width: 200px;
            height: 200px;
            border-radius: 100px;
            background-color: black;
            margin-left: 10px;
        }
        .img{
            object-fit:cover;width: 100%;
            height: 100%;
            border-radius: 50%;

        }
    </style>
</head>
<body>

    <div class="pre-container">
        <div class="pre-thum">
            <div class="pre-child"><img src="uploads/<?php echo $user['p_p']; ?>" alt="" srcset=""></div>
            <div class="pre-child"><img src="uploads/<?php echo $currentUser[0]['p_p'] ?>" alt="" class="img"></div>
        </div>
    </div>
</body>
</html>