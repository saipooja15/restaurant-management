<?php 
session_start();
include('../user/dbcon.php');
if(!$_SESSION["admin"])
{
    header("Location:login.php");
}
?>
  
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <style  type="text/css">
      a.nav-link:hover{color:grey;
        font-size: 40px}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Restaurant.css">
    <title>Bill</title>
    <style>
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 150px;
      }
      /* Set a style for all buttons */
      button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }

      button:hover {
        opacity: 0.8;
      }
      .section {
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
      }

      .section h1 {
        text-align: center;
        font-size: 6rem;
        font-family: "Cookie";
        padding: 20px;
        margin: 15px;
        z-index: 1;
        opacity: 0.7;
      }

      .video-container {
        position: absolute;
        top: 0;
        left:0;
        width:100%;
      }
      .color-overlay {
        position: absolute;
        top: 0;
        left: 0;
        background-color: none;
        width: 100%;
        height: 100vh;
        opacity: 0.5;
      }


      /* Modal Content/Box */
      .modal-content {
        background-color: #fefefe;
        margin:  auto; /* 15% from the top and centered */
        border:5px solid black;
        width: 25%; /* Could be more or less, depending on screen size */
      }
      /* Center the avatar image inside this container */
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
      }

      /* Avatar image */
      img.avatar {
        width: 60%;
        border-radius: 50%;
      }


      /* The Close Button */
      .close {
        /* Position it in the top right corner outside of the modal */
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
      }

      /* Close button on hover */
      .close:hover,
      .close:focus {
        color: red;
        cursor: pointer;
      }


      .container-xl {
          width: 100%;
          padding-right: 75px;
          padding-left: 15px;
          margin-right: auto;
          margin-left: auto;
      }

      /* Add Zoom Animation */
      .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
      }
      .div-center{
        width: 600px;
         left: 50%;
        transform: translateX(-50%);
      }

      @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)}
        to {-webkit-transform: scale(1)}
      }

      @keyframes animatezoom {
        from {transform: scale(0)}
        to {transform: scale(1)}
      }
       body {
          background-image: url('assets/waiter-bg.jpg');
          background-size:cover;
              backdrop-filter: blur(5px);
        }
    </style>
  </head>
  <body>
              
    <?php include('layouts/header.php'); ?>
    <br><br>
    <div  class="div-center card">
        <table   class="table">
            <tr>
                <td>Order ID</td>
                <td>Customer ID</td>
                <td>Amount</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
            <?php
                $amount=0;
                $sql = "SELECT *FROM orders WHERE status = 2 OR status = 3  ";
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $it = $row['ODER_NO'];
                        ?>
                        <tr>
	                        <td><?php echo $row["ODER_NO"]; ?></td>
	                        <td><?php echo $row["customer_id"]; ?></td>
	                        <td><?php echo $row["amount"]; ?></td>
	                        <td><?php  
                                if($row["status"] == 2) { echo "Waiting for Payment"; } 
                                else { echo "Completed"; } ?></td>
                            <td>
                                <?php if($row["status"] == 2) { echo "<a href='donepayment.php?id=$it' class='btn btn-primary'>Payment Done ?</a>"; } 
                                else { echo "<a href='#' class='btn btn-success'>Completed</a>"; } ?>
                            </td>
                        </tr>
                        
                        <?php    
                    }
                }
?>
         </table>
         <br>
          
    </div>
     
   
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
		     

 