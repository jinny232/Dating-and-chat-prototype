<?php
 
?>
<!-- Page 1: Name and Email -->

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
<div class="container">
  <form action="page2.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br>
    <label for="location">Location:</label>
    <input type="text" id="location" name="location"><br>
    <input type="submit" value="Next" name="submit">
    <button onclick="window.location.href='page2.php';">Skip</button>
  </form>
</div>

</body>
</html>
