<?php
$dbhost="localhost";
$dbuser="root";
$debpass="";
$dbname="login_data";

$conn=new mysqli($dbhost, $dbuser, $debpass, $dbname);

if($conn->connect_error)
{
   die("<br>Connection Failed". $conn->connect_error);
}
else
{
    echo "";
}

?>
