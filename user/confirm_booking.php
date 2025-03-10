<?php
session_start();
include '../connect.php';

include 'header.html';

?>
<body class="homepage">
    <section class ="content">
<div class="info-container">
<p  style="font-size:50px; font-weight:bold;">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
      </p>
      
    </div>
    </section>