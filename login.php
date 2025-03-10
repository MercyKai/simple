<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalmSpace</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="login-page">

  <div class="wrapper">

    <div class="info-container">            
      <h2 class="site-title">Welcome to CalmSpace</h2>
        <p class="site-information">
          Struggling with your mental health? 
          You are not alone. We are here for you. 
          We connect you with professional therapists
          from the comfort of your home. 
          Whether you need a listening ear, 
          expert guidance or tools to manage stress,
          we have you covered. With live video sessions, 
          therapy feels easier and more personal. 
          We provide real support when you need it.
          Ready to start your journey?
        </p>            
      </div>

    <div class="login-container">

    <?php
    session_start();
    if (isset($_SESSION['error'])) {
        echo "<p class='error-message'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    ?>

      <div class="index-container" id="signup" style="display:none;">
        <h1 class="form-title">Sign Up</h1>
          <form method="post" action="register.php">

            <div class="input-group">
              <i class="fas fa-user-tag"></i>
                <select id="usertype" name="usertype" required>
                    <option value="" disabled selected>User Type</option>
                    <option value="user">User</option>
                    <option value="therapist">Therapist</option>
                </select>
            </div>

            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
            </div>
            <div class="input-group">
                  <i class="fas fa-user"></i>
                  <input type="text" name="lName" id="lName" placeholder="Last Name" required>
              </div>
              <div class="input-group">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="email" id="email" placeholder="Email" required>
              </div>
              <div class="input-group">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password" id="password" placeholder="Password" required>
              </div>
              <div class="press-btn">   
                <input type="submit" class="btn" id="submitSignUp" value="Sign Up" name="signUp">
              </div>              
            </form>
              <div class="links">
                  <p>Already Have Account ?</p>
                  <button id="signInButton">Sign In</button>
              </div>
        </div>

        <div class="index-container" id="signIn">
          <h1 class="form-title">Sign In</h1>        
            <form method="post" action="register.php">
              <div class="input-group">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="email" id="email" placeholder="Email" required>
              </div>
              <div class="input-group">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password" id="password" placeholder="Password" required>
              </div>
              <div class="press-btn">
                <input type="submit" class="btn" id="submitSignIn" value="Sign In" name="signIn">
              </div>
            </form>        
              <div class="links">
                <p>Don't have account yet?</p>
                <button id="signUpButton">Sign Up</button>
              </div>
            </div>
        </div>
    </div>
    
      <script src="js/script.js"></script>
</body>
</html>