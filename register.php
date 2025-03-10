<?php
include 'connect.php';
session_start();

//signing up
if (isset($_POST['signUp'])) {
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $usertype = $_POST['usertype'];

    $checkEmailUser ="SELECT * From users Where email='$email'";
    $resultUser = $conn->query($checkEmailUser);
    $checkEmailTherapist= "SELECT * From therapists Where email='$email'";
    $resultTherapist = $conn->query($checkEmailTherapist);
    if ($resultUser->num_rows>0 || $resultTherapist->num_rows>0) {
        $_SESSION['error'] ="Email Address Already Exists!";
        header("Location: login.php");
    } 
    else {
        switch ($usertype){
            case 'user':
                $insertQuery="INSERT INTO users (firstName, lastName, email, password) VALUES ('$firstName','$lastName','$email',$password')";
                break;
            case 'therapist':
                $insertQuery="INSERT INTO users (firstName, lastName, email, password) VALUES ('$firstName','$lastName','$email',$password')";
                break;
            default:
                $_SESSION['error'] = "Invalid!";
                header("Location: login.php");
                exit();
        }

        if($conn->query($insertQuery)===TRUE){
            header("Location: login.php");
        } 
        else{
            $_SESSION['error'] = "Error: " . $conn->error;
            header("Location: login.php");
        }
        exit();
    }
}

if (isset($_POST['signIn'])) {
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sqlUser="SELECT * From users Where email='$email' AND password='$password'";    
    $resultUser=$conn->query($sqlUser);
    $sqlTherapist="SELECT * From therapists Where email='$email' AND password='$password'";
    $resultTherapist=$conn->query($sqlTherapist);    
    $sqlAdmin="SELECT * From admins Where email='$email' AND password='$password'";
    $resultAdmin=$conn->query($sqlAdmin);

    if ($resultUser->num_rows>0){
        $row=$resultUser->fetch_assoc();
        $_SESSION['email']=$row['email'];
        $_SESSION['usertype']='user';
        header("Location: user/user_dashboard.php");
        exit();
    } 
    elseif($resultTherapist->num_rows>0){
        $row=$resultTherapist->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        $_SESSION['usertype']='therapist';
        header("Location: therapist/therapist_dashboard.php");
        exit();
    } 
    elseif($resultAdmin->num_rows>0){
        $row=$resultAdmin->fetch_assoc();
        $_SESSION['email']=$row['email'];
        $_SESSION['usertype']='admin';
        header("Location: admin/admin_dashboard.php");
        exit();
    } 
    else{
        $_SESSION['error']="Incorrect Email or Password!";
        header("Location: login.php");
        exit();
    }
}

//creating admin account
/*
$checkAdmin="SELECT * From admins";
$resultAdmin=$conn->query($checkAdmin);

if ($resultAdmin->num_rows===0) {
    $firstName='Calmspace';
    $lastName='Admin';
    $email='admin@calmspace.com';
    $password=md5('calmspaceAdmin@123');
    $insertQuery="INSERT INTO admins (firstName,lastName,email,password) 
                VALUES ('$firstName','$lastName','$email','$password')";
    if(!$conn->query($insertQuery)){
        echo("Error creating admin account: ".$conn->error);
    }
}
?>
*/