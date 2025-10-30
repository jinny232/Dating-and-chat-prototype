<?php
session_start();
include 'header.php';
if(isset($_POST['submit'])){
    $_SESSION['height'] = $_POST['height'];
    $_SESSION['body'] = $_POST['body'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/css/style.css" rel="stylesheet">
  <title>About Me Form</title>  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding: 0;
      background-image: url('bg3.jpeg'); /* Add your background image URL here */
      background-size: cover;
      font-family: Arial, sans-serif;
      color: #333; /* Default text color */
    }

    form {
      width: 300px;
      padding: 20px;
      background-color: transparent;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    label, select {
      display: block;
      margin-bottom: 10px;
    }

    select {
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      width: 100%;
      box-sizing: border-box;
      font-size: 16px;
    }

    input[type="submit"],
    button {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      width: 48%;
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

    .head {
      background-color: rgba(255, 192, 203, 0.8);
      padding: 20px;
      text-align: center;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
    }
  </style>
</head>
<body>
  <div class="head">
    <h1>About Me</h1>
  </div>
  <!-- Page 3: Religion and Zodiac Sign -->
  <form action="page5.php" method="post" >
    <label for="religion">Religion:</label>
    <select id="religion" name="religion" required>
      <option value="christianity">Christianity</option>
      <option value="islam">Islam</option>
      <option value="hinduism">Hinduism</option>
      <option value="buddhism">Buddhism</option>
      <option value="sikhism">Sikhism</option>
      <option value="other">Others</option>
    </select>

    <label for="zodiac_sign">Zodiac sign:</label>
    <select id="zodiac_sign" name="zodiac_sign" required>
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

    <input type="submit" value="Submit" name="submit">
   
  </form>
</body>
</html>
