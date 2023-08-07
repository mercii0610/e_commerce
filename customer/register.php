<?php
    $uname=$_POST["uname"];
    $upass1=$_POST["upass1"];
    $upass2=$_POST["upass2"];

    if($upass1!=$upass2)
    {
        echo "Password Mismatch";
        die;
    }
    include_once "../shared/connection.php";    
    $sql_result=mysqli_query($conn,"select * from users where username='$uname'");

    $row_count=mysqli_num_rows($sql_result);
    if($row_count>0)
    {
        echo "Username Already Exists!";
        die;
    }
    $query="insert into users(username,password,user_type) values('$uname','$upass1','customer')";
    $status=mysqli_query($conn,$query);
    if($status)
    {
        echo "Registartion Successfull";
    }
    else
    {
        echo "Error in registration";
        echo mysqli_error($conn);
    }

?>