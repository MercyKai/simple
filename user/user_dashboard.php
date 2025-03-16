<?php
session_start();
include '../connect.php';
include 'header.html';
?>

<body class="homepage">
    <section class="content">
        <div class="heading">
            <p class="page-title">Welcome To CalmSpace</p>
            <h1 class="site-motto" style="text-transform: capitalize;">Hello 
                <?php 
                //display the user's name
                if(isset($_SESSION['email'])) {
                    $email=$_SESSION['email'];
                    $query=mysqli_query($conn,"SELECT firstName,lastName FROM users WHERE email='$email'");
                    if ($row=mysqli_fetch_assoc($query)) {
                        echo $row['firstName'] . ' ' . $row['lastName'];
                    }
                }
                ?>
            </h1>
        </div>

        <section class="book-container">
            <div class="heading">
              <h1 class="site-motto">Therapists Available</h1>
            </div>
            <table>
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Therapist Name</th>
                    <th>Email</th>
                  </tr>
              </thead>
              <tbody>
              <tbody>
                <?php
                    // Get all therapists from the database
                    $resultTherapist=mysqli_query($conn,"SELECT firstName,lastName,email FROM therapists");  
                    // Check if there are therapists in the database         
                    if(mysqli_num_rows($resultTherapist)>0){
                    $a=1;
                    while($therapist=mysqli_fetch_assoc($resultTherapist)): 
                  ?>                                 
                    <!--Display the therapists in a table-->
                    <tr>
                      <td><?php echo $a++; ?></td>
                      <td style="text-transform: capitalize;">
                        <?php
                          echo $therapist['firstName'] . " " . $therapist['lastName']; ?>
                          </td>
                      <td>
                        <a href="mailto:<?php echo $therapist['email']; ?>">
                          <?php echo $therapist['email']; ?></a>
                    </td>
                  </tr>                      
                  <?php 
                      endwhile;
                      }else{ 
                  ?>
                  <!--Display a message if there are no therapists in the database-->
                  <tr>
                  <td colspan="3">No therapists available.</td>
                  </tr>
                  <?php } ?>
                </tbody>
            </table>
        </section>
<section class="book-container" style="background:none;">
<div class="heading">
<h1 class="site-motto">Please reach out to any of our therapists for any help you need. </h1>
</div>


</section>





    </section>
</body>
</html>
