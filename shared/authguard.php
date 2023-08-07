<html>
    <head>
        <style>
            .user-info
            {
                display:flex;
                justify-content:space-around;
                background-color:maroon;
                color:white
            }
        </style>
    </head>
    <body>
        
    </body>
</html>

<?php

session_start();

if(!isset($_SESSION['login_status']))
{
    echo "Unauthorised Access";
    die;
}

if($_SESSION['login_status']==false)
{
    echo "Illegal Attempt Login First";
    die;
}

$uname=$_SESSION['username'];
$userid=$_SESSION['userid'];
$user_type=$_SESSION['user_type'];

echo "<div class='user-info'>
    <div>$userid : $uname</div>
    <div>$user_type</div>
    <div>  
        <a href='../shared/logout.php'>
        <button> Logout </button>
        </a>
    </div>
</div>";

?>