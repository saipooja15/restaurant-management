<?php 
session_start();
include('dbcon.php');

if($_GET)
{
	$id = $_GET["id"];
    echo $Cashier_id;
	$SQL = "DELETE FROM cashier WHERE Cashier_id = $id";
 	if ($con->query($SQL) === TRUE) {
    echo "New record created successfully";
  header("Location:cashier.php");
}else
{
    echo "asdasd";
}
}


?>