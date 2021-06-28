<?php 
session_start();
include('dbcon.php');
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
    <title>WAITER</title>
    <style  type="text/css">
      a.nav-link:hover{color:grey;
      font-size: 40px}
          .card {
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
          max-width: 300px;
           text-align: center;
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
        body {
          background-image: url('assets/waiter-bg.jpg');
          background-size:cover;
              backdrop-filter: blur(5px);
        }
    </style>
  </head>
  <body>
    <!--NAVBAR-->
    <?php include('layouts/header.php');  ?>
    <br><br>
    &nbsp;&nbsp;<a href="add-waiter.php" class="btn btn-primary">Add New Waiter</a>
    <br> <br>
    <div class=" container row " > 
     
    <?php 
     	$sql = "SELECT *FROM waiter";
		$result = $con->query($sql);

		if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
                    $id = $row["ID_no"];
			    ?>
			    <div class="col-lg-3">
                    <div class="card" >
                        <img src="<?php echo $row["image"]; ?>"  style="width:100%">
                        <h1><?php echo $row["name"]; ?> </h1>
                        <p class="title">Contact No:<?php echo $row["Contact"]; ?></p>
                        
                        <p><a href="deletewaiter.php?id=<?php echo $id; ?>" class="btn btn-dark">Delete</a></p>
                    </div>
                </div>
			    <?php
			    }
			} else {
			  echo "0 results";
	    }  ?>
    </div>         
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
  </body>
</html>