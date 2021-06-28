<?php
// remove all session variables
session_start();

// destroy the session
session_destroy();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
  <img src="assets/logout.jpg" alt="Norway" style="width:100%;">
  <div class="text-block">
    <h4>Logout Successful!</h4>
    <a href="index.php">
    <p><button class="btn"><i class="fa fa-home"></i>Back to Home</button></p>
  </div>
</div>
<style>
/* Container holding the image and the text */
.container {
  position: relative;
}

/* Bottom right text */
.text-block {
  position: absolute;
  bottom: 260px;
    right: 160px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>