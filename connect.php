<?php 

$localhost = "localhost";
$username  = "root";
$password  = "";
$dbname    = "dbs";

$con = new mysqli($localhost, $username, $password, $dbname);

if($con->connect_error){
    die("connection failed : " . $conn->connection_error);
}