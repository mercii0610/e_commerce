
<?php
include "../shared/authguard.php";
include "menu.html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <div class="d-flex justify-content-center align-items-start mt-3 vh-100">
    
    <form enctype="multipart/form-data" action="upload.php" class="w-50 p-3 bg-info" method="POST">
        
        <input class="form-control mt-3" type="text" name="name" placeholder="Product Name">
        <input class="form-control mt-3" type="number" name="price" placeholder="Product Price">
        <textarea placeholder="Product Description.." class="form-control mt-3" name="details" id="" cols="20" rows="3"></textarea>
        <input class="form-control mt-3" type="file" name="pdtimg">

        <div class="text-center mt-2">
        <button class="btn btn-success">Submit</button>
        </div>
        
    </form>
    

    </div>
</body>
</html>