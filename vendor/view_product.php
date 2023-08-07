<html>
    <head>
        <style>
            .mycard
            {
                width:200px;
                height:150px;
                display:inline-block;
                padding:10px;
            }
            img
            {
                width:100%;
                height:80%;
            }
        </style>
    </head>
    <body>
        
    </body>
</html>

<?php

include "../shared/authguard.php";
include "menu.html";

include_once "../shared/connection.php";

$userid=$_SESSION['userid'];

$sql_result=mysqli_query($conn,"select * from product where uploaded_by=$userid");

while($row=mysqli_fetch_assoc($sql_result))
{
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    $impath=$row['impath'];

    echo "<div class='mycard'>
    
            <div>$name</div>
            <div>$price</div>
            <div>
                <img src='$impath'> 
            </div>
            <div>$details</div>

    </div>";
}


?>