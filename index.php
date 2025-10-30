<?php

// Include the database connection file
include 'app/db.conn.php';
include 'header.php';
// Function to fetch data from the database

if (isset($_SESSION['username'])) {

    function fetchDataFromDatabase($conn) {
        $id = $_SESSION['user_id']; // Assuming user_id is stored in the session
        try {
            $stmt = $conn->prepare("SELECT name,gender, location, age, p_p, img1, img2, img3, alcohol, smoking, connection, interest_in, prefer_height, prefer_religion, prefer_age, prefer_location FROM users WHERE user_id != :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    function getCurrentUser($conn) {
        $id = $_SESSION['user_id']; // Assuming user_id is stored in the session
        try {
            $stmt = $conn->prepare("SELECT name,gender, location, age, p_p, img1, img2, img3, alcohol, smoking, connection, interest_in, prefer_height, prefer_religion, prefer_age, prefer_location FROM users WHERE user_id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    $currentUser = getCurrentUser($conn);
    $interestIn = $currentUser[0]['interest_in'];
    echo $interestIn;
    // Fetch data from the database
    $userData = fetchDataFromDatabase($conn);

    // Function to calculate the percentage match between current user and other users
    function calculatePercentage($currentUser, $userData) {
        // Attributes to skip
        $skipAttributes = ['name', 'location', 'gender', 'age', 'p_p', 'img1', 'img2', 'img3','interest_in'];

        // Get the total number of attributes
        $totalAttributes = count($currentUser[0]);

        // Initialize a variable to count the matched attributes
        $matchedAttributes = 0;

        // Loop through each attribute
        foreach ($currentUser[0] as $key => $value) {
            // Skip certain attributes
            if (in_array($key, $skipAttributes)) {
                continue;
            }

            // Check if the attribute exists in both current user and user data
            if (isset($userData[$key])) {
                // Compare the values of the attribute
                if ($value == $userData[$key]) {
                    $matchedAttributes++;
                }
            }
        }

        // Calculate the percentage of matched attributes out of 100%
        $percentage = ($matchedAttributes / ($totalAttributes - count($skipAttributes))) * 100;

        // Round the percentage to the nearest integer
        $roundedPercentage = round($percentage);

        // Ensure the percentage is capped at 100%
        $finalPercentage = ($roundedPercentage > 100) ? 100 : $roundedPercentage;

        return $finalPercentage;
    }

    // Calculate percentage for each user fetched from the database
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="preference.css">
        <title>Document</title>
        <style>
            .pre-container{
                width: 70%;
                height: auto;
                margin-left: 200px;
                display: flex;
                justify-content: center;
                background-color: #ffff;
                margin-top: 140px;
                padding: 20px;
                flex-direction: column;
                height:auto;

            }
            .pre-thum{
                width: 100%;
                height: 100%;
                border-radius: 10px;
                display: flex;
                justify-content:flex-start;
                align-items: center;
                margin-bottom: 40px;
                padding-top: 20px;
                padding-left: 20px;
                border: 2px;
                border-bottom: 2px solid black;
            }
            .pre-child{
                width: 300px;
                height: 270px;
                border-radius: 100px;
                background-color: black;
                margin-left: 20px;
                position: relative;
            }
            .img{
                object-fit:cover;
                width: 100%;
                height: 100%;
                border-radius:10px;

            }
            .heart{
                width: 100px;
                height: auto;
            }
            .pre-data{
                margin-top:5px;
                display: flex;
                justify-content: flex-start;
            }
            .pre-data div{
                margin-right: 30px;
            }
            .name{
                font-size: 22px;
                font-weight:bold;
            }
            .age-loca{
                opacity: 0.8;
            }
            svg circle{
                fill:none;
                stroke: black;
                stroke-width:2;
            }
            .percen{
                background-color: black;
                height:auto ;
                width: 60px;
                color:#ffff ;
                display:flex;
                border-radius: 50%;
                justify-content: center;
                align-items: center;
            }
            .percen div{
                margin-left:23px;
            }
        </style>
    </head>
    <body>

        <div class="pre-container">

            <?php
            foreach ($userData as $user) {
                // Check if the user's interest_in matches the current user's gender
                if($interestIn === "Both"){

                    $percentage = calculatePercentage($currentUser, $user);
                    if ($percentage > 0) { ?>  
                        <div class="pre-data">
                            <div>
                                <div class="name"><?php echo $user['name'] ?></div>
                                <div class="age-loca"><?php echo $user['age'] ?>,<?php echo $user['location'] ?></div>
                            </div>
                            <div class="percen">
                                <div><?php echo $percentage ?>%</div>
                            </div>
                        </div>
                        <div class="pre-thum">
                            <div class="pre-child"><img src="uploads/<?php echo $user['p_p']; ?>" alt="" srcset="" class="img"></div>
                            <div class="pre-child"><img src="img/<?php echo $user['img1']; ?>" alt="" srcset="" class="img"></div>
                            <div class="pre-child"><img src="img/<?php echo $user['img2']; ?>" alt="" srcset="" class="img"></div>
                        </div>

                    <?php
                }
            }
               else if ($user['gender'] === $interestIn ) {
                    $percentage = calculatePercentage($currentUser, $user);
                    if ($percentage > 0) { ?>  
                        <div class="pre-data">
                            <div>
                                <div class="name"><?php echo $user['name'] ?></div>
                                <div class="age-loca"><?php echo $user['age'] ?>,<?php echo $user['location'] ?></div>
                            </div>
                            <div class="percen">
                                <div><?php echo $percentage ?>%</div>
                            </div>
                        </div>
                        <div class="pre-thum">
                            <div class="pre-child"><img src="uploads/<?php echo $user['p_p']; ?>" alt="" srcset="" class="img"></div>
                            <div class="pre-child"><img src="img/<?php echo $user['img1']; ?>" alt="" srcset="" class="img"></div>
                            <div class="pre-child"><img src="img/<?php echo $user['img2']; ?>" alt="" srcset="" class="img"></div>
                        </div>
                    <?php
                    } else {
                        ?>
                        <div class="pre-data">No match with you</div>
                    <?php
                    }
                }
            }
            ?>
        </div>
    </body>
    </html>

    <?php
}else{
    header('Location: intro.php');
    exit;
}

?>
