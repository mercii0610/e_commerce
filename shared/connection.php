<?php

$conn=new mysqli("localhost","root","","acme23_mar");
if($conn->connect_error)
{
    echo "Error in Connection";
    die;
}


?>