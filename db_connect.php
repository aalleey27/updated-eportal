<?php
$server = "localhost";
$username = "root";
$pasword = "";
$database = "student";

$conn = mysqli_connect($server, $username, $pasword, $database);
if($conn){
    // echo "Succeess";

}
else {
    die("Error" . mysqli_connect_error());
}
?>