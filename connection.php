<?php
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$total=$_POST['total'];
print_r($_POST);
$conn=new mysqli("localhost","root","","acme23_mar");

if($conn->connect_error)
{
    echo "Connection Failed";
    die;
}
else{
    echo "Connection Success";
}

$status=mysqli_query($conn,"insert into student(name,age,gender,total) values('$name',$age,'$gender',$total)");
if($status)
{
    echo "Record Created Successfully!";
}
else
{
    echo "Error in Creating Record";
    echo mysqli_error($conn);
}
?>