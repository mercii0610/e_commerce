<?php

$uname=$_POST['uname'];
$upass=$_POST['upass'];

if($uname=="acme" && $upass=="intern")
{
    header("location:home.html");
}
else
{
    echo "<h1>Invalid Credentials</h1>";
}

?>