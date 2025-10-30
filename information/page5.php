<?php
session_start();
include 'header.php';
if(isset($_POST['submit'])){
    $_SESSION['religion'] = $_POST['religion'];
    $_SESSION['zodiac_sign'] = $_POST['zodiac_sign'];
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
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-image: url('bg4.jpeg'); /* Add your background image URL here */
      background-size: cover;
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
  <!-- Page 4: Occupation and Relationship -->
  <form action="page6.php" method="post">
  <label for="occupation">Occupation:</label>
      <select class="form-control mt-3" name="occupation" required>
      <option value="student">Student</option>
            <option value="teacher">Teacher</option>
            <option value="doctor">Doctor</option>
      </select>
    <label for="relationship">Relationship:</label>
    <select id="relationship" name="relationship" required>
      <option value="single">Single</option>
      <option value="in_relationship">In a Relationship</option>
      <option value="engaged">Engaged</option>
      <option value="married">Married</option>
      <option value="divorced">Divorced</option>
      <option value="widowed">Widowed</option>
      <option value="complicated">It's Complicated</option>
      <option value="other">Other</option>
    </select>
    
    <input type="submit" value="Submit" name="submit">
    
  </form>
</body>
</html>
