<?php 
session_start();
include('dbcon.php');

if($_GET)
{
	$id = $_GET["id"];
    echo $order_id;
	$SQL = "DELETE FROM waiter WHERE ID_no = $id";
 	if ($con->query($SQL) === TRUE) {
    echo "New record created successfully";
  header("Location:waiter.php");
}else
{
    echo "asdasd";
}
}


?>