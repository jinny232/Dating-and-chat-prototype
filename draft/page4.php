<?php

session_start();


session_start();
if(isset($_POST['submit'])){
    $_SESSION['height'] = $_POST['height'];
    $_SESSION['bodytype'] = $_POST['bodytype'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      width: 300px; /* Adjust the width as needed */
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    label, input {
      display: block;
      margin-bottom: 10px;
    }
    .head{
    background-color: pink;
    position: fixed; 
    top: 0; 
    left: 0; 
    width: 100%;
    background-color: pink;
    padding: 20px; 
    text-align: center;
    z-index: 1000;
  }

    
  </style>
</head>
<body>
<div class="head"><h1>About me</h1></div>
<!-- Page 2: Age and Height -->
<form action="page5.php" method="post">
<label for="religion">Religion:</label>
<select id="religion" name="religion">
  <option value="christianity">Christianity</option>
  <option value="islam">Islam</option>
  <option value="hinduism">Hinduism</option>
  <option value="buddhism">Buddhism</option>
  <option value="sikhism">Sikhism</option>
  <option value="judaism">Judaism</option>
  <option value="other">Other</option>
</select><br>
    <label for="astsign">Zodiac sign:</label>
    <select id="astsign" name="astsign">
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
    <input type="submit" value="Submit">
    <button onclick="window.location.href='page5.php';">Skip</button>
</form>
</body>
</html>