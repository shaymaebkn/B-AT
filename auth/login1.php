<?php
include_once '../connect/connection.php';

if(isset($_POST['email']) && isset($_POST['password'])){

  

    function validate($data){

      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
    }
    
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    
    
      $sql="SELECT * FROM `clients` WHERE email='$email' AND password='$password'";
      $result=mysqli_query($con,$sql);
      
      if(mysqli_num_rows($result) === 1){

       $row=mysqli_fetch_assoc($result);

       if($row['email']===$email && $row['password']===$password){
        session_start();
      

       $_SESSION['email']=$row['email'];
       $_SESSION['fname']=$row['fname'];
       $_SESSION['lname']=$row['lname'];
       $_SESSION['password']=$row['password'];
       $_SESSION['username']=$row['username'];

       $_SESSION['Number']=$row['Number'];
       $_SESSION['Country']=$row['Country'];
       $_SESSION['City']=$row['City'];
       $_SESSION['Age']=$row['Age'];
       $_SESSION['picture']=$row['picture'];
       $_SESSION['type_coaching']=$row['type_coaching'];
       $_SESSION['Height']=$row['Height'];
       $_SESSION['Weight']=$row['Weight'];
       $_SESSION['weight_goal']=$row['weight_goal'];

       
       
       header("location:../users/home.php");
      }else{
        header("location:login.php?error=incorrect in password");
        
      }
      

    }
    else{
        header("location:login.php?error= your email or password is not valid");
      }
    }

    ?>