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
        // if(empty($_SESSION['cart'])){
        //   $_SESSION['cart'] = [];
        // }

       $_SESSION['email']=$row['email'];
       $_SESSION['fname']=$row['fname'];
       $_SESSION['lname']=$row['lname'];
       $_SESSION['password']=$row['password'];
       $_SESSION['username']=$row['username'];
       $_SESSION['Number']=$row['Number'];
      // $_SESSION['lastName']=$row['lastName'];
      //  $_SESSION['firstName']=$row['firstName'];
       
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

<!-- // if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $password = $_POST['password'];
  $answer = $_POST['user'];  
  if ($answer == "coaché") {     
    $Result = mysqli_query($con , "SELECT * FROM `clients` WHERE  email = '$email' AND `password` = '$password");
  if(mysqli_num_rows($Result)){

    echo"
    <script>
    alert('succesfully login');
    window.location.href= 'users/home.php';
    </script>
    ";
  }else{
    
    echo"
    <script>
    alert('incoreect your information coaché');
    window.location.href= 'login.php';
    </script>
    ";
  }
     
           
  }
   if($answer == "coach"){
    $Result = mysqli_query($con , "SELECT * FROM `coach` WHERE (`email` ='$email' OR username = '$email' )AND  `Password` ='$password'");
    if(mysqli_num_rows($Result)){
      session_start();
      $_SESSION['user'] = $email;
  
      echo"
      <script>
      alert('succesfully login');
      window.location.href= 'view/home.php';
      </script>
      ";
    }else{
      
      echo"
      <script>
      alert('incoreect your information coach ');
      window.location.href= 'login.php';
      </script>
      ";
    }
      
  }   -->
  
// }
   