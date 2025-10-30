<?php
session_start();
include 'header.php';
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
<form action="page2.php" method="post">
    <div class="container">
        <label for="Alcohol">Alcohol</label>
        <select id="height" name="alcohol">
            <option value="Never">Never</option>
            <option value="Often">Often</option>
            <option value="Sometime">Sometime</option>
            <!-- Add more options as needed -->
        </select>
    </div>
    
    <div class="container">
        <label for="Sometime">Smoking</label>
        <select id="body" name="smoking">
            <option value="Yes">Never</option>
            <option value="No">Often</option>
            <option value="Sometime">Sometime</option>
            <!-- Add more options as needed -->
        </select>
       
    </div>
    <div class="container">
        <label for="relation type">Connection </label>
        <select id="body" name="connection">
            <option value="long-term dating">Long-term dating </option>
            <option value="Short-term dating">Short-term dating</option>
            <option value="Hookups">Hookups</option>
            <!-- Add options as needed -->
        </select>
       
    </div> 
    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>
