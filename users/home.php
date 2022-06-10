<?php include '../auth/nav.php' ?>
<p>hello 
   
</p>
 <?php 
    include_once '../connect/connection.php';
    session_start();
    if(isset($_SESSION['password']) && isset($_SESSION['email'])) {

  

    $query=mysqli_query($con,"SELECT * FROM `clients` WHERE email='?'");
     

    echo $_SESSION['email'];

    
     ?><br>
     holla <?php echo $_SESSION['fname'];?>
     <?php
    }
else{
// header('location:login1.php');

}
?>
<p>my number is <?php echo $_SESSION['Number'];?></p>