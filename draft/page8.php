<?php
session_start();


session_start();
if(isset($_POST['submit'])){
    $_SESSION['idealtype'] = $_POST['idealtype'];

}
?>
<!DOCTYPE html>
<header>
    <style>
.input-image-box {
  position: relative;
  width: 200px;
  height: 200px;
  overflow: hidden;

}

.input-image-box input[type="file"] {
  display: none;
}

.input-image-box label {
  display: block;
  width: 100%;
  height: 100%;
  cursor: pointer;
  position: relative;
}

#preview-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.plus-icon {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 36px;
  color: #555;
}
.container {
  width: 200px;
  height: 200px;
  border: 2px solid black;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  transition: background-color 0.3s ease; /* Add transition for smooth effect */
}

.container:hover {
  background-color: #fce4ec; /* Pale pink color */
}

.container input[type="file"] {
  display: none;
}

.container label {
  cursor: pointer;
  position: absolute;
}

.container #preview-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.container .plus-icon {
  font-size: 36px;
  color: #555;
}
.box{
    padding-top: 20%;
    padding-left: 30%;
    width:100%;
    display:flex;
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
</header>
<body>
<div class="head"><h1>About me</h1></div>
<form action="submit.php" method="post">
    <div class="box">
    <div class="container">
    <div class="input-image-box">
        <input type="file" id="image-upload" accept="image/*" name="img1" required>
        <label for="image-upload">
          <div class="plus-icon">+</div>
        </label>
      </div></div>
      <div class="container">
        <div class="input-image-box">
            <input type="file" id="image-upload" accept="image/*" name="img2" required>
            <label for="image-upload">
              <div class="plus-icon">+</div>
            </label>
          </div></div>
          <div class="container">
            <div class="input-image-box">
                <input type="file" id="image-upload" accept="image/*" name="img3" required>
                <label for="image-upload">
                  <div class="plus-icon">+</div>
                </label>
              </div></div>
      </div>
      <input type="submit" value="Submit">
     
</body>