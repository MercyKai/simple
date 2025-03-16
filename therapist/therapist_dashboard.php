<?php
session_start();
include '../connect.php';

include 'header.html';

?>
<body class="homepage">
    <section class ="content">
        <div class="heading">
                    <p class="page-title">Welcome To CalmSpace</p>
                    <h1 class="site-motto" style="text-transform: capitalize;">Hello 
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
            <section class="main-container" style="background: none; box-shadow: none;">             
        <div class="information">
            <p class="page-title">Facial Emotion Recognition</p>
            <h2 class="site-motto">New in Technology and AI</h2>
            <p class="page-info">
                Discover how AI detects emotions in real-time!  
                Facial Emotion Recognition system analyzes 
                expressions and predicts emotions.  
                Try it out and see, explore different facial expressions, 
                and see how AI interprets them!  
            </p>
            <a href="facial.php" class="btn" style="margin-top:20px;">Try it out!</a>
        </div>
        
        <div class="info-image">
            <img class="image-two"  src="../img/ed.jpg">
        </div>
    </section>          
    </section>
</body>
</html>
