
<nav class="navbar navbar-expand-lg navbar-dark p-2 bg-danger">
    <a class="navbar-brand" href="./index.php"> 
        <img src="./assets/Restaurants.png" width="80"
         height="80">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link active"style="color:white;    margin-left: 75px;"  href="order.php">Orders</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link active"style="color:white;    margin-left: 75px;"  href="waiter.php">Waiters</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link active"style="color:white;    margin-left: 75px;"  href="cashier.php">Cashier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"style="color:white;  margin-left: 75px;" href="menu.php">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:white;  margin-left: 75px;" href="bill.php">Bill</a>
            </li>
            <?php if($_SESSION){ ?>
             <li class="nav-item">
              <a class="nav-link" style="color:white;  margin-left: 75px;" href="logout.php">Logout</a>
            </li>
            
          <?php  } ?>
          
        </ul>
    </div>
</nav>