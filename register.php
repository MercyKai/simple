<?php
include 'connect.php';
session_start();
// Check if the sign-up button is clicked
if (isset($_POST['signUp'])) {
    // Collect form data
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $usertype=$_POST['usertype'];
    // Check if the email already exists in the database
    $query="SELECT * From users Where email='$email'";
    $resultUser=mysqli_query($conn, $query);
    $query="SELECT * From therapists Where email='$email'";
    $resultTherapist=mysqli_query($conn, $query);
    // If the email already exists, display an error message
    if (mysqli_num_rows($resultUser)>0 || mysqli_num_rows($resultTherapist)>0) {
        $_SESSION['error']="Email Already Exists!";
        header("Location: login.php");
        exit();
    } else {
        // Insert user or therapist into the database
        switch ($usertype) {
            case 'user':
                $query="INSERT INTO users(firstName, lastName, email, password) 
                        VALUES('$firstName','$lastName','$email','$password')";
                break;
            case 'therapist':
                $query="INSERT INTO therapists(firstName, lastName, email, password) 
                        VALUES('$firstName','$lastName','$email','$password')";
                break;
            default:
                $_SESSION['error']="Invalid user type!";
                header("Location: login.php");
                exit();
        }
        // Execute the query
        $result=mysqli_query($conn, $query);
        if ($result) {
            header("Location: login.php");
            exit();
        } else {
            $_SESSION['error']="Error: ".mysqli_error($conn);
            header("Location: login.php");
            exit();
        }
    }
}
// Check if the sign-in button is clicked
if (isset($_POST['signIn'])) {
    // Collect form data
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    // Check if the email and password match a user in the database
    $query="SELECT * From users Where email='$email' AND password='$password'";    
    $resultUser=mysqli_query($conn, $query);
    $query="SELECT * From therapists Where email='$email' AND password='$password'";
    $resultTherapist=mysqli_query($conn, $query);
    // If the user exists, redirect to the user dashboard
    if (mysqli_num_rows($resultUser)>0) {
        $row=mysqli_fetch_assoc($resultUser);
        $_SESSION['email']=$row['email'];
        $_SESSION['usertype']='user';
        header("Location: user/user_dashboard.php");
        exit();
    } 
    // If the therapist exists, redirect to the therapist dashboard
    elseif (mysqli_num_rows($resultTherapist)>0) {
        $row=mysqli_fetch_assoc($resultTherapist);
        $_SESSION['email']=$row['email'];
        $_SESSION['usertype']='therapist';
        header("Location: therapist/therapist_dashboard.php");
        exit();
    } 
    // If credentials are incorrect, display an error message
    else {
        $_SESSION['error']="Incorrect Email or Password!";
        header("Location: login.php");
        exit();
    }
}
?>
