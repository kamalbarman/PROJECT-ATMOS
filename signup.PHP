<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Account</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
        <label for="fname">name:</label>
        <input type="text" id="fname" name="name"><br>

        <label for="fname">gender</label>
        <input type="text" id="lname" name="name"><br>
        
        <label for="fname">email</label>
       <input type="text" id="lname" name="email"><br>
        
        <label for="fname">password</label>
        <input type="text" id="lname" name="password"><br>

        <input type="submit" value="Submit" name="submit">
 </body>
</html>


<?php

include "dbcon.php";

if(isset($_POST['submit'])){
    $username = $_POST["name"];
    $gender = $_POST["gender"];
}