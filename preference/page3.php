<?php
session_start();
include 'header.php';
if(isset($_POST['submit'])){
    $_SESSION['interest_in'] = $_POST['interest_in'];
    $_SESSION['prefer_body'] = $_POST['prefer_body'];
    $_SESSION['prefer_height'] = $_POST['prefer_height'];
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
            margin-top: -17px;
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
<form action="../app/http/preference.php" method="post">
    <div class="container">
        <label for="height"></label>
        <select id="religion" name="prefer_religion">
                <option value="christianity">Christianity</option>
                <option value="islam">Islam</option>
                <option value="hinduism">Hinduism</option>
                <option value="buddhism">Buddhism</option>
                <option value="sikhism">Sikhism</option>
                <option value="other">Others</option>
    </select>
    </div>
    <div class="container">
    <label for="zodiac_sign">prefered Zodiac sign:</label>
    <select id="zodiac_sign" name="prefer_zodiac_sign">
      <option value="aries">Aries</option>
      <option value="taurus">Taurus</option>
      <option value="gemini">Gemini</option>
      <option value="cancer">Cancer</option>
      <option value="leo">Leo</option>
      <option value="virgo">Virgo</option>
      <option value="libra">Libra</option>
      <option value="scorpio">Scorpio</option>
      <option value="sagittarius">Sagittarius</option>
      <option value="capricorn">Capricorn</option>
      <option value="aquarius">Aquarius</option>
      <option value="pisces">Pisces</option>
    </select>
       
    </div>
    <div class="container">
        <label for="body">prefered age</label>
        <select id="body" name="prefer_age">
            <option value="18-25">18-25</option>
            <option value="26-35">26-35</option>
            <option value="36-above">36-above</option>
            <!-- Add more options as needed -->
        </select>
    </div>
    <div class="container">
        <label for="body">perfered location</label>
        <select id="body" name="prefer_location">
            <option value="Yangon">Yangon</option>
            <option value="Mandalay">Mandalay</option>
            <option value="Taunggy">Taunggy</option>
            <option value="Naypyitaw">Naypyitaw</option>
            <option value="Myeik">Myeik</option>
            <!-- Add more options as needed -->
        </select>
    </div>  
    <input type="submit" value="submit" name="submit">
    <button type="button" onclick="window.location.href='page4.php';">Skip</button>
</form>
</body>
</html>
