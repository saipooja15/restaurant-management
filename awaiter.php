<?php 
session_start();
include('../user/dbcon.php');

if($_GET)
{
	$order_id = $_GET["id"];
    echo $order_id;
	$SQL = "UPDATE orders SET status = 1 WHERE ODER_NO = $order_id";
	echo $SQL;
	if ($con->query($SQL) === TRUE) {
    echo "New record created successfully";
  header("Location:order.php");
}else
{
    echo "asdasd";
}
}


?>
