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
        
    <script>
        function validate()
        {
            res=confirm("Are you sure want to Place Order?");
            return res;
        }
    </script>
    </body>
</html>
<?php

include "../shared/authguard.php";
include "menu.html";

$userid=$_SESSION['userid'];
include_once "../shared/connection.php";
$sql_result=mysqli_query($conn,"select * from cart join product on product.pid=cart.pid where userid=$userid and is_ordered=0");

$total_price=0;
while($row=mysqli_fetch_assoc($sql_result))
{
    $cartid=$row['cartid'];
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    $impath=$row['impath'];

    $total_price=$total_price+$row['price'];

    echo "<div class='mycard'>
    
            <div>$name</div>
            <div>$price</div>
            <div>
                <img src='$impath'> 
            </div>
            <div>$details</div>
            <div>
                <a href='deletecart.php?cartid=$cartid'>
                <button class='btn btn-primary'>Remove from cart</button>
                </a>
            </div>

    </div>";
}
echo "<hr class='mt-5'>";
if($total_price>0)
{
echo "<div class='mt-5'>
    <div class='display-4'>Gross Total = Rs.$total_price</div>    
    <form method='get' action='placeorder.php' onsubmit='return validate()'>
        <input name='pid' style='display:none'>
        <button class='btn btn-danger'>Place Order</button>
    </form>
</div>";
}
else
{
    echo "<div class='display-2'>No Items in Cart</div>";
}


?>