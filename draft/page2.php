<?php
session_start();
if(isset($_POST['submit'])){
    $_SESSION['name'] = $_POST['name'];
    
}


?>

<!-- Page 2: Age and Height -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Age Selection</title>
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
    
    .gender-selector {
        display: flex;
        flex-direction: row;
    }
    .gender-selector label {
        margin-bottom: 10px;
    }
    .gender-selector input[type="radio"] {
        margin-right: 5px;
    }
</style>
</head>
<body>
<div class="head"><h1>About me</h1></div>
<form action="page3.php" method="post">
   <div class="container">
    <div><label for="age">Age:</label>
    <input type="number" name="age" id="age" required></div><br>
    
<div><label for="gender">Gender:</label>
    <div class="gender-selector">
        <label><input type="radio" name="gender" value="Male">Male</label>
        <label><input type="radio" name="gender" value="Female">Female</label>
        <label><input type="radio" name="gender" value="Others">Others</label>
        
    </div></div>
</div>
<input type="submit" value="Next" name="submit">
<button onclick="window.location.href='page3.php';">Skip</button>
</form>
</body>
</html>
