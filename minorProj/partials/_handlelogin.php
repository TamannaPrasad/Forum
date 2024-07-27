<?php
$showalert=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $email=$_POST['loginemail'];
    $pass=$_POST['loginpassword'];
    $sql="select * from `users` where user_email='$email'";
    $result=mysqli_query($conn,$sql);
    $numRows=mysqli_num_rows($result);
    if($numRows==1){
        $row=mysqli_fetch_assoc($result);
            if(password_verify($pass,$row['user_pass'])){
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['sno']=$row['sno'];
                $_SESSION['useremail']=$email;
                $successfulLogin = true;
                echo "<script>alert('You are logged in'); window.location.href='/minorProj/index.php';</script>";
                exit;
            }
            else{
                //echo "unable to log in";
                
                echo "<script>alert('Passwords do not match'); window.location.href='/minorProj/index.php';</script>";
                exit;
            }
        }
        else{
            echo "<script>alert('Please sign in first'); window.location.href='/minorProj/index.php';</script>";
            exit;
        }
    }


?>