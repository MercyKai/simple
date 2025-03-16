<?php
session_start();
include("connect.php");

include 'templates/header.html';

?>
<body class="homepage">
    <section class="content">
        <div class="heading">
            <p class="page-title">Welcome To CalmSpace</p>
            <h1 class="site-motto">Your well-being is our priority.</h1>
        </div>

        <div class="main-container"> 
            <div class="information">
                <h2 class="info">Talk To Us.</h2>
                <p class="page-info">Our mission here at CalmSpace is to
                    help you take care of your mental health by providing 
                    support and guidance. CalmSpace is here to make 
                    therapy accessible to you, so you can get the help you need. 
                    We help you find balance, peace and live a happier life.
                </p>
            </div>
            <div class="info-image">
                <img class="image-two" style="margin-bottom: 20px" src="img/img4.png">
            </div>
        </div>

    <section class="wrap-container">
        <div class="heading">
            <p class="page-title">Services</p>
                <h1 class="site-motto">Our Expertise</h1>
            </div>
        <div class="cards">
            <div class="card">
                <img src="img/individual.jpg" alt="" class="card-image">
                <div class="card-content">
                    <h2 class="card-title">Individual Counseling</h2>
                    <p class="card-description">Personalized therapy for you.</p>
                    <a href="services.php#individual" class="btn">Learn More</a>
                </div>
            </div>

            <div class="card">
                <img src="img/couple.jpg" alt="" class="card-image">
                <div class="card-content">
                    <h2 class="card-title">Couples Counseling</h2>
                    <p class="card-description">Strengthen your relationship.</p>
                    <a href="services.php#couples" class="btn">Learn More</a>
                </div>
            </div>

            <div class="card">
                <img src="img/trauma.jpg" alt="" class="card-image">
                <div class="card-content">
                    <h2 class="card-title">Trauma Counseling</h2>
                    <p class="card-description">Support during tough times.</p>
                    <a href="services.php#trauma" class="btn">Learn More</a>
                </div>
            </div>
        </div>

        <div class="more">
            <a href="services.php" id="more-link">More →</a>
        </div>
    </section>

    <section class="wrap-container">
        <div class="heading">
            <p class="page-title">Our Therapists</p>
                <h1 class="site-motto">Meet Our Experts</h1>
            </div>

        <div class="cards">
            <div class="card">
                <img src="img/therapist7.png" class="card-image">
                <div class="card-content">
                    <h2 class="card-title">Dr. Emily Carter</h2>
                    <p class="card-description">Psychologist.</p>
                    <a href="therapists.php#emily" class="btn">View Profile</a>
                </div>
            </div>

            <div class="card">
                <img src="img/therapist1.png" class="card-image">
                <div class="card-content">
                    <h2 class="card-title">Michael Johnson</h2>
                    <p class="card-description">Clinical social worker.</p>
                    <a href="therapists.php#michael" class="btn">View Profile</a>
                </div>
            </div>

            <div class="card">
                <img src="img/therapist5.png" class="card-image">
                <div class="card-content">
                    <h2 class="card-title">Dr. Sarah Lee</h2>
                    <p class="card-description">National Certified Counselor</p>
                    <a href="therapists.php#sarah" class="btn">View Profile</a>
                </div>
            </div>

        </div>

        <div class="more">
            <a href="therapists.php" id="more-link">More →</a>
        </div>
    </section>

    <section class="main-container">             
        <div class="information">
            <p class="page-title">About Us</p>
            <h2 class="site-motto">A Calm Space for Your Mental Health</h2>
            <p class="page-info">
            At CalmSpace, we care about your mental well-being. 
            We offer friendly, professional therapy to help you 
            feel supported and understood.
            Whether you are dealing with stress, anxiety, 
            depression or just need someone to talk to, 
            our licensed therapists are here for you. 
            We provide personalized sessions to meet your 
            needs, making it easy to take care of your mental 
            health.
            </p>
            <a href="login.php" class="btn">GET STARTED</a>
        </div>
        
        <div class="info-image">
            <img class="image-two" src="img/about4.png">
        </div>
    </section>
</section>

<?php 
include 'templates/footer.html'; 
?>

</body>
</html>