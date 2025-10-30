<?php

session_start();

session_start();
if(isset($_POST['submit'])){
    $_SESSION['religion'] = $_POST['religion'];
    $_SESSION['astsign'] = $_POST['astsign'];
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
<form action="page6.php" method="post">
    <label for="occupation">Occupation:</label>
    <select id="occupation" name="occupation">
  <option value="student">Student</option>
  <option value="teacher">Teacher</option>
  <option value="engineer">Engineer</option>
  <option value="doctor">Doctor</option>
  <option value="nurse">Nurse</option>
  <option value="artist">Artist</option>
  <option value="writer">Writer</option>
  <option value="entrepreneur">Entrepreneur</option>
  <option value="accountant">Accountant</option>
  <option value="lawyer">Lawyer</option>
  <option value="chef">Chef</option>
  <option value="other">Other</option>
</select>

    <label for="relationship">Relationship:</label>
    <select id="relationship" name="relationship">
  <option value="single">Single</option>
  <option value="in_relationship">In a Relationship</option>
  <option value="engaged">Engaged</option>
  <option value="married">Married</option>
  <option value="divorced">Divorced</option>
  <option value="widowed">Widowed</option>
  <option value="complicated">It's Complicated</option>
  <option value="other">Other</option>
</select>
    <br>
    <input type="submit" value="Submit">
    <button onclick="window.location.href='page6.php';">Skip</button>
</form>
</body>
</html>