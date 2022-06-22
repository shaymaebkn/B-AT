<?php
    include_once '../connect/connection.php';

    if(isset($_POST['submit'])){
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $username = $_POST['username'];
      $number = $_POST['Number'];
      $email = $_POST['email'];
      $country = $_POST['Country'];
      $city = $_POST['City'];
      $age = $_POST['Age'];
      $height = $_POST['height'];
      $weight = $_POST['weight'];
      $weight_goal = $_POST['weight_goal'];
      $type = $_POST['type'];
      $sleep = $_POST['sleep'];
      $activ = $_POST['activ'];
      $pic = $_POST['picture'];
      $password = $_POST['password'];

    
      $Dup_Email = mysqli_query($con, "SELECT * FROM `clients` WHERE email = '$email'");
      $Dup_username = mysqli_query($con, "SELECT * FROM `clients` WHERE username = '$username' ");

      if(mysqli_num_rows($Dup_Email)){
        echo"
        <script>
        alert('This email is already taken');
        window.location.href= 'registration.php';
        </script>
        ";
      }elseif(mysqli_num_rows($Dup_username)){
        echo"
        <script>
        alert('This username is already taken');
        window.location.href= 'registration.php';
        </script>
        ";
      }
      else{
       $requet = ("INSERT INTO `clients`( `fname`, `lname`, `username`, `Number`,
        `email`, `Country`, `City`, `Age`, `Height`, `Weight`, `weight_goal`, `type_coaching`, `hours_sleep`,
         `physical_activity`, `picture`, `password`) 
        VALUES  ('$fname','$lname','$username','$number','$email','$country','$city','$age','$height',
        '$weight','$weight_goal','$type','$sleep','$activ','$pic','$password')");
        
        $query = mysqli_query($con,$requet);
         if ($query === TRUE) {
             header('Location: welcome.php?mensaje=registrado');
            echo"sucessful";
         } else {
             header('Location: registration.php?mensaje=error');
            echo'error';
             exit();
         }
         
       
        // echo"
        // <script>
        // alert('registration succesfully');
        // window.location.href= 'registration.php';
        // </script>
        // ";
        // exit();

      // }
    
   
     
      }
    }
  
    ?>