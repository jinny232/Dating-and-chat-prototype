<?php
session_start();


    $name = $_POST['name'];
    $gender= $_POST["gender"];
    $age = $_POST["age"];
    $height= $_POST["height"];
    $weight= $_POST["weight"]; 
    $body = $_POST["body"];
    $location = $_POST["location"];
    $occupation = $_POST["occupation"];
    $interests = $_POST["interests"];
    $relationship = $_POST["relationship"];
    $religion = $_POST["religion"];
    $astsign = $_POST["astsign"];
    $idealType = $_POST["ideal"];



$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement to insert data into users table
$sql = "INSERT INTO aboutme (name,gender,age,height,weight,body,location,occupation,interests,relationship,religion,astsign,idealtype) VALUES ('$name', '$gender', '$age', '$height','$weight','$body','$location','$occupation','$interests','$relationship','$religion','$astsign','$idealtype')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
