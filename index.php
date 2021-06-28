<?php 

include('../user/dbcon.php');
session_start();
if(!$_SESSION["admin"])
{
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    <title>DashBoard</title>
    <style  type="text/css">
      a.nav-link:hover{color:grey;
      font-size: 40px}
          .card {
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            text-align: left;
            }

        .title {
          color: grey;
          font-size: 18px;
        }

        button {
          border: none;
          outline: 0;
          display: inline-block;
          padding: 8px;
          color: white;
          background-color: #000;
          text-align: center;
          cursor: pointer;
          width: 100%;
          font-size: 18px;
        }
        
        a {
          text-decoration: none;
          font-size: 22px;
          color: black;
        }
        
        button:hover, a:hover {
          opacity: 0.7;
        }
    </style>
  </head>
  <body>
    <!--NAVBAR-->
    <?php include('layouts/header.php');  ?>
    <br><br>
    <div class="p-2">
        <div class="row">
            <div class="col-lg-3">
                <div class="card bg-danger p-2">
                    <h1 class="text-white">
                                    <?php
                $count=0;
                $sql = "SELECT *FROM orders ";
                $result = $con->query($sql);
                echo $result->num_rows;
                    ?>
                        
                    </h1>
                    <p class="text-white">Total Orders</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card bg-primary p-2">
                    <h1 class="text-white">
                                    <?php
                $count=0;
                $sql = "SELECT *FROM menu ";
                $result = $con->query($sql);
                echo $result->num_rows;
                    ?>
                        
                    </h1>
                    <p class="text-white">Total Items</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card bg-success p-2">
                    <h1 class="text-white">
                                    <?php
                $count=0;
                $sql = "SELECT *FROM user_signup ";
                $result = $con->query($sql);
                echo $result->num_rows;
                    ?>
                        
                    </h1>
                    <p class="text-white">Total User</p>
                </div>
            </div>
        </div>
    </div>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
  </body>
</html>