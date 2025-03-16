<?php
session_start();
include("connect.php");

include 'templates/header.html';

?>

<body class = "homepage">
    
<section class="content">
    <div class="heading">
        <p class="page-title">Our Therapists</p>
            <h1 class="site-motto">Meet Some of Our Experts</h1>
        </div>

<section class="main-container" id="emily">             
    <div class="information">
        <p class="page-title">Dr. Emily Carter</p>
        <h2 class="site-motto">Psychologist</h2>
        <p class="page-info">
        Dr. Carter is a licensed psychologist with over 15 years 
        of experience in helping people manage stress, anxiety 
        and emotional well-being. She specializes in Cognitive 
        Behavioral Therapy (CBT), a proven method to change 
        negative thought patterns and improve mental health.</p>
    </div>

    <div class="info-image">
        <img class="image-two" src="img/therapist7.png">
        </div>
</section>

<section class="main-container" id="michael">             
    <div class="information">
        <p class="page-title">Michael Johnson</p>
        <h2 class="site-motto">Clinical social worker</h2>
        <p class="page-info">
        Michael is a licensed clinical social worker who helps 
        people with relationship struggles, depression and 
        personal growth. He specializes in couples and family 
        therapy, helping individuals navigate emotional challenges 
        and improve communication.</p>
    </div>
        
    <div class="info-image">
        <img class="image-two" src="img/therapist1.png">
        </div>
</section>

<section class="main-container" id="sarah">             
    <div class="information" >
        <p class="page-title">Dr. Sarah Lee</p>
        <h2 class="site-motto">National certified counselor</h2>
        <p class="page-info">
        Dr. Lee specializes in trauma therapy, helping people 
        recover from past trauma, PTSD and emotional pain. 
        She uses mindfulness-based therapy to support emotional 
        healing and resilience. To help heal from past experiences 
        and regain a sense of control. 
        </p>
    </div>
        
    <div class="info-image">
        <img class="image-two" src="img/therapist5.png">
        </div>
</section>

<section class="main-container">             
    <div class="information">
        <p class="page-title">Dr. Robert Adams</p>
        <h2 class="site-motto">Psychiatrist</h2>
        <p class="page-info">
        Dr. Adams is a board-certified psychiatrist who specializes 
        in treating mood disorders, anxiety and OCD. He offers a 
        comprehensive approach to mental health care, combining 
        therapy with medication management when needed.
        </p>
    </div>
        
    <div class="info-image">
        <img class="image-two" src="img/therapist3.png">
        </div>
</section>

<section class="main-container">             
    <div class="information">
        <p class="page-title">Dr. Lisa Brown</p>
        <h2 class="site-motto">Child Psychologist</h2>
        <p class="page-info">
        Dr. Brown is a specialist in child and adolescent psychology,
        helping children, teenagers and parents navigate emotional 
        and behavioral challenges. She provides a supportive, 
        engaging approach tailored to younger clients.
        </p>
    </div>
        
    <div class="info-image">
        <img class="image-two" src="img/therapist4.png">
        </div>
</section>

<section class="main-container">  
                
        <div class="information-two">
            <img class="image" src="img/ready.jpg">
        </div>

        <div class="information">
            <p class="page-title">Ready to Start Your journey?</p>
            <h2 class="site-motto">Contact Us Today!</h2>
            <p class="page-info">
                Take the first step towards healing and self-growth with 
                our expert therapists. Whether you need help 
                with stress, anxiety, relationships or personal growth, 
                we provide a safe space for conversations and change.
            </p>
            <a href="login.php" class="btn">GET STARTED</a>
        </div>   
    </section>
</section>
    
<?php 
include 'templates/footer.html'; 
?>

</body>
</html>