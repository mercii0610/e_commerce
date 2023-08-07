<?php

$pid=$_GET['pid'];

session_start();

$userid=$_SESSION['userid'];


/**
 * Task check if User and product combination already exists
 * IF not insert into cart table
 * If pid already exists , dont insert
 */

 include_once "../shared/connection.php";

 $status=mysqli_query($conn,"insert into cart(userid,pid) values($userid,$pid)");
 if(status)
 {
    echo "Product added to cart sucessfully!";
    header("location:home.php");
 }


?>