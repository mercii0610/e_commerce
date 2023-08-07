<?php
    $uname=$_POST["uname"];
    $upass1=$_POST["upass1"];
    $upass2=$_POST["upass2"];

    if($upass1!=$upass2)
    {
        echo "Password Mismatch";
        die;
    }
    
    $conn=new mysqli("localhost","root","","acme23_mar");
    if($conn->connect_error)
    {
        echo "Error in connection";
        die;
    }

    $status=mysqli_query($conn,"insert into users(username,password) values('$uname','$upass1')");
    if($status)
    {
        echo "Registration Successfull!";
    }
    else
    {
        echo "Error in Registartion";
        echo mysqli_error($conn);
    }
    
?>