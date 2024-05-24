<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "practice";

$con = mysqli_connect($server,$username,$password,$dbname);

if ($con) {
    echo ("connected sucessfuly");
}else{
    echo("somthing went error");
}

?>

