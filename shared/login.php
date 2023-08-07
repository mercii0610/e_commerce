<?php

$uname=$_POST['uname'];
$upass=$_POST['upass'];

include_once "../shared/connection.php";
session_start();
$_SESSION['login_status']=false;

$sql_result=mysqli_query($conn,"select * from users where username='$uname' and password='$upass'");

$row_count=mysqli_num_rows($sql_result);
if($row_count==0)
{
    echo "Invalid Credentials";
    die;
}
$row=mysqli_fetch_assoc($sql_result);
$userid=$row['userid'];
$username=$row['username'];
$user_type=$row['user_type'];

$_SESSION['login_status']=true;
$_SESSION['userid']=$userid;
$_SESSION['username']=$username;
$_SESSION['user_type']=$user_type;

if($user_type=="vendor")
{ 
    header("location:../vendor/home.php");
}
if($user_type=="customer")
{
    header("location:../customer/home.php");
}
?>