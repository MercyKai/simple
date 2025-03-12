<?php
session_start();
include '../connect.php';

include 'header.html';

?>

<body class="homepage">

<body class="homepage">
    <section class ="content">
        <div class="heading">
                    <p class="page-title">Welcome To CalmSpace</p>
                    <h1 class="site-motto">Hello 
                        <?php 
                        if(isset($_SESSION['email'])) {
                            $email=$_SESSION['email'];
                            $query=mysqli_query($conn, "SELECT therapists.* FROM `therapists` WHERE email='$email'");
                            while($row=mysqli_fetch_array($query)) {
                                echo $row['firstName'].' '.$row['lastName'];
                            }
                        }
                        ?>
                    </h1>
            </div>





            
    </section>
</body>
</html>
