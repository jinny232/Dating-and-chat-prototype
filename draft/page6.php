<?php

session_start();

session_start();
if(isset($_POST['submit'])){
    $_SESSION['occupation'] = $_POST['occupation'];
    $_SESSION['relationship'] = $_POST['relationship'];
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
<form action="page7.php" method="post">
    <label for="interest">Age:</label>
    <textarea id="interest" name="interest" rows="4" cols="50"></textarea>
    <input type="submit" value="Submit">
    <button onclick="window.location.href='page7.php';">Skip</button>
</form>
</body>
</html>