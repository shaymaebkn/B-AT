<?php
include 'connect.php';

    if(isset($_POST['email']) && isset($_POST['password'])){

    // $customerCode = $_GET['customerCode'];
 
      function validate($data){

        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
      }
      
      $email = validate($_POST['email']);
      $password = validate($_POST['password']);

      if(empty($email)){
      header("location:login.php?error=Email is required");
     exit();
      }
      else if(empty($password)){
        header("location:login.php?error=Password is required");
        exit();
      }
      else{
        $sql="SELECT * FROM `clients` WHERE email='$email' AND password='$password'";
        $result=mysqli_query($con,$sql);
        
        if(mysqli_num_rows($result) === 1){

         $row=mysqli_fetch_assoc($result);

         if($row['email']===$email && $row['password']===$password){
          session_start();
        //   if(empty($_SESSION['cart'])){
        //     $_SESSION['cart'] = [];
        //   }

         $_SESSION['email']=$row['email'];
         $_SESSION['password']=$row['password'];
         $_SESSION['adress']=$row['adress'];
         $_SESSION['phone']=$row['phone'];
         $_SESSION['customerCode']=$row['customerCode'];
         $_SESSION['lastName']=$row['lastName'];
         $_SESSION['firstName']=$row['firstName'];
         
         header("location:profile.php");
        }else{
          header("location:login.php?error=incorrect in password");
          
        }
        

      }
      else{
          header("location:login.php?error= your email or password is not valid");
        }
      }


    }
     else{
       header("location: login.php");
        }
       
      
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">

<div class="text-center">
<h1 class="m-5">SIGN IN</h1>
</div>


<div class="container" >

<div class="mb-3 row">
  
  
    
<label for="email" class="form-label">Email :</label>
<input type="email" class="form-control-lg" name="email" >
</div>

<div class="row">

<label for="password" class="form-label">Password :</label>
<input type="password" class="form-control-lg" name="password" >
</div>

</div>

  <?php if(isset($_GET['error'])) { ?>

     <p class="error text-center" ><?php echo $_GET['error']?></p>
     <?php } ?>

<div class="text-center">
<button type="submit" name="login" style="background-color:#FFB3C6;" class="mt-5 btn-lg">LOGIN</button>
<p class="mt-2 mb-5">Don’t have an account yet? <a href="signup.php" class="text-primary">Sign-up</a> now</p>
</div>
</form>
