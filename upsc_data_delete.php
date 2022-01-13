<?php
$server="localhost";
$username="root";
$password="";
$database="upsc_db";

$con = new mysqli($server,$username,$password,$database);
if($con->connect_error){
    die("Failed".$con->connect_error);
}
    $sname = $_GET['sname'];

    $sql = "DELETE FROM `candidates` WHERE sanme='$sname'";
    $result = mysqli_query($con,$sql);
    if($result == true) {
        echo"<script>alert('Delete suscess');</script>";
    }
    else {
        echo"<script>alert('Delete not suscess');</script>";

    }
    
?>