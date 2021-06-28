<?php 
session_start();
include('../user/dbcon.php');

if($_GET)
{
	$order_id = $_GET["id"];
    echo $order_id;
	$SQL = "UPDATE orders SET status = 3 WHERE ODER_NO = $order_id";
 	if ($con->query($SQL) === TRUE) {
    echo "New record created successfully";
  header("Location:bill.php");
}else
{
    echo "asdasd";
}
}


?>
