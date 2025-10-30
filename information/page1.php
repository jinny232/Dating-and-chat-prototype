<?php
// Include the file with the database connection
include 'header.php';
session_start();
$isLogin = $_SESSION['isLogin'];
if(!$isLogin){


if (isset($_POST['submit'])) {
  // Process form data
  // Insert into databa
  // Redirect to next page or success message
  header("Location: page2.php");
  exit;
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
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .head {
      background-color: rgba(255, 192, 203, 0.8);
      padding: 20px;
      text-align: center;
    }

    .container-p1 {
      max-width: 450px;
      margin: 50px auto;
      margin-top: 130px;
      background-color: transparent;
      padding: 50px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    form {
      flex-direction: column;
    }

    label {
      font-weight: bold;
    }

    input[type="text"] {
      padding: 12px;
            margin-bottom: 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
            box-sizing: border-box;
            font-size: 16px;
    }

    input[type="submit"],
        button {
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            width: 48%; /* Adjust button width */
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
  </style>
</head>
<body>
<div class="container-p1">
  <form action="page2.php" method="post">
    <label for="name">Nickname:</label><br>
    <input type="text" name="nickname" id="nickname" required><br>
    <label for="location">Location:</label><br>
    <input type="text" id="location" name="location" required><br>
    <input type="submit" value="Next" name="submit" required>
  </form>
</div>

</body>
</html>
<?php }else{
  header('Location: ../index.php');
  exit;

}
?>