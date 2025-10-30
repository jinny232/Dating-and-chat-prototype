<?php

session_start();
if(isset($_POST['submit'])){
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['gender'] = $_POST['gender'];
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
<form action="page4.php" method="post">
<label for="height">Height:</label>
<select id="height" name="height">
  <option value="150">150-155cm</option>
  <option value="155">155-160cm</option>
  <option value="160">160-165cm</option>
  <option value="165">165-170 cm</option>
  <option value="170">170-175cm</option>
  <!-- Add more options as needed -->
</select>
<label for="body">BodyType:</label>
<select id="body" name="body">
  <option value="">Average</option>
  <option value="">Fit</option>
  <option value="">A little extra</option>
  <option value="">Curvy</option>
  <option value="">Full figured</option>
<br>
    <input type="submit" value="Submit">
     <button onclick="window.location.href='page4.php';">Skip</button>
</form>
</body>
</html>