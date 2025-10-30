<?php
session_start();
include 'header.php';
if(isset($_POST['submit'])){
    $_SESSION['idealtype'] = $_POST['idealtype'];
    $_SESSION['connection'] = $_POST['connection'];
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
      background-image: url('bg6.jpeg'); /* Add your background image URL here */
      background-size: cover;
      color: #333; /* Default text color */
    }

    form {
      width: 300px;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.9);
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    label, textarea {
      display: block;
      margin-bottom: 10px;
    }
    
    textarea {
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      width: 100%;
      box-sizing: border-box;
      resize: vertical; /* Allow vertical resizing */
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

    .box {
      width: 200px;
      height: 200px;
      border: 2px dashed #ccc;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      overflow: hidden;
    }

    .box img {
      max-width: 100%;
      max-height: 100%;
    }

    .container {
      position: relative;
    }

    input[type="file"] {
      display: none;
    }

    .plus-icon {
      font-size: 24px;
      cursor: pointer;
    }
    .img-container{
      display: flex;

    }
  </style>
</head>
<body>
  <div class="head">
    <h1>About Me</h1>
  </div>
  <!-- Ideal Type Form -->
  <form action="../app/http/details.php" method="post">
    <label for="bio">Describe Your Bio:</label>
    <textarea id="bio" name="bio" rows="4" cols="50" placeholder="Enter your bio..." required></textarea>
    
    <!-- Image Upload Section -->
    <div class="img-container">
    <div class="box">
      <div class="container">
        <input type="file" id="image-upload1" accept="image/*" name="img1" onchange="previewImage(event, 'preview-image1')" required>
        <label for="image-upload1">
          <div class="plus-icon">+</div>
        </label>
        <img id="preview-image1" src="" alt="Preview" style="display: none;" name="img1";>
      </div>
    </div>

    <div class="box">
      <div class="container">
        <input type="file" id="image-upload2" accept="image/*" name="img2" onchange="previewImage(event, 'preview-image2')" required>
        <label for="image-upload2">
          <div class="plus-icon">+</div>
        </label>
        <img id="preview-image2" src="" alt="Preview" style="display: none;">
      </div>
    </div>

    <div class="box">
      <div class="container">
        <input type="file" id="image-upload3" accept="image/*" name="img3" onchange="previewImage(event, 'preview-image3')" required>
        <label for="image-upload3">
          <div class="plus-icon">+</div>
        </label>
        <img id="preview-image3" src="" alt="Preview" style="display: none;">
      </div>
    </div>
    </div>
    <br><input type="submit" value="Submit" name="submit">
  </form>
  <script>
    function previewImage(event, previewId) {
      const input = event.target;
      const preview = document.getElementById(previewId);
      if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
          preview.src = e.target.result;
          preview.style.display = 'block';
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

</body>
</html>
