<?php
session_start();
include 'header.php';
if(isset($_POST['submit'])){
    $_SESSION['alcohol'] = $_POST['alcohol'];
    $_SESSION['smoking'] = $_POST['smoking'];
    $_SESSION['connection'] = $_POST['connection'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>About Me Form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: #333; /* Default text color */
        }

        .head {
            background-color: rgba(255, 192, 203, 0.8);
            padding: 20px;
            text-align: center;
            margin-bottom: 130px;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            background-color: transparent;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        select {
            padding: 12px;
            margin-bottom: 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"],
        button {
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            width: 48%; /* Adjust button width */
            box-sizing: border-box;
            text-align: center;
            text-transform: uppercase;
        }

        input[type="submit"] {
            background-color: #ff69b4; /* Pink */
            color: white;
        }

        input[type="submit"]:hover,
        button:hover {
            opacity: 0.9;
        }

        button {
            background-color: #ccc;
            color: #333;
        }

        button:last-child {
            margin-right: 0;
        }

        @media (max-width: 600px) {
            input[type="submit"],
            button {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
<div class="head">
    <h1>Preference</h1>
</div>
<form action="page3.php" method="post">
    <div class="container">
        <label for="interest_in">Interested in </label>
        <select id="height" name="interest_in">
            <option value="Woman">Woman</option>
            <option value="Man">Man</option>
            <option value="Both">Both</option>
            <!-- Add more options as needed -->
        </select>
    </div>
    
    <div class="container">
        <label for="body">I prefer Body Type:</label>
        <select id="body" name="prefer_body">
            <option value="Slim">Slim</option>
            <option value="Fit">Fit</option>
            <option value="A little extra">A little extra</option>
            <option value="Curvy">Curvy</option>
            <option value="Full figured">Full figured</option>
            <!-- Add more options as needed -->
        </select>
       
    </div>
    <div class="container">
        <label for="height">prefered Height</label>
        <select id="body" name="prefer_height">
            <option value="155">150-160cm</option>
            <option value="160">160-170cm</option>
            <option value="165">170-180cm</option>
            <!-- Add more options as needed -->
        </select>
       
    </div> 
    <input type="submit" value="submit" name="submit">
    <button type="button" onclick="window.location.href='page4.php';">Skip</button>
</form>
</body>
</html>
