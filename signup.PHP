<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Account</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="fname">name:</label>
        <input type="text" id="fname" name="name"><br>

        <label for="fname">gender</label>
        <input type="text" id="lname" name="gender"><br>
        
        <label for="fname">email</label>
       <input type="text" id="lname" name="email"><br>
        
        <label for="fname">password</label>
        <input type="text" id="lname" name="password"><br>

        <input type="submit" value="Submit" name="submit">
        </form>
 </body>
</html>


<?php

include "dbcon.php";

if(isset($_POST['submit'])){
    $username = $_POST["name"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $insertquery ="INSERT INTO signup (Name,Gender,Email,Password)

    VALUES('$username','$gender','$email','$password')";

    $query = mysqli_query($con,$insertquery);

    if($query) {
        ?>
        <script>
            alert("insert successfuly");
        </script>
        <?php }else{ ?>
            <script>
                alert("somthing went wrong");
            </script>
<?php
        }
    }  
  ?>  
    
