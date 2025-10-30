<?php
session_start();
include 'header.php';
if(isset($_POST['submit'])){
    $_SESSION['nickname'] = $_POST['nickname'];
    $_SESSION['location'] = $_POST['location'];
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

        input[type="number"] {
            padding: 12px;
            margin-bottom: 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
            box-sizing: border-box;
            font-size: 18px;
        }

        .gender-selector {
            display: flex;
            flex-wrap: wrap;
        }

        .gender-selector label {
            margin-right: 20px;
            display: inline-flex;
            align-items: center;
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
        <h1>About Me</h1>
    </div>
    <form action="page3.php" method="post">
        <div class="container">
        <label for="Age">Age:</label>
      <select class="form-control mt-3" name="age">
      <option value="18-25">18-25</option>
            <option value="26-35" required>26-35</option>
            <option value="36-above" required>36-above</option>
      </select>
        </div>
        
        <div class="container">
            <label>Gender:</label>
            <div class="gender-selector">
                <label><input type="radio" name="gender" value="Woman" required>Woman</label>
                <label><input type="radio" name="gender" value="Man" required>Man</label>
                <label><input type="radio" name="gender" value="Others" required>Others</label>
            </div>
        </div>

        <input type="submit" value="Next" name="submit">
    </form>
</body>
</html>
