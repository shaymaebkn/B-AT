<?php
    require_once('connection.php');
    // include ('header.php');
    $message = "your email is already registed !";
    
?>
<?php
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
      $password = $_POST['password'];

      $query=mysqli_query($con,"SELECT * FROM `clients` WHERE email='$email'");

      if(mysqli_num_rows($query)>0){
        echo "<script type='text/javascript'>alert('$message');</script>";
      
      
  }else{

  
       $sql="INSERT INTO `clients`( `fname`, `lname`, `username`, `Number`, `email`, `Country`, `City`, `Age`,`Height`, `Weight`, `weight_goal`, `type_coaching`, `hours_sleep`, `physical_activity`, `password`) 
        VALUES  ('$fname','$lname','$username','$number','$email','$country','$city','$age','$height','$weight','$weight_goal','$type','$sleep','$country','$activ','$password')";
      
       $result = mysqli_query($con,$sql);

       if($result){
        
        
        echo "<script type='text/javascript'>
        Swal.fire(
          'Your registration is successful!',
          '',
          'success',
        )
           
              </script>";
        
      }else{
        echo "<h1 id='rg'>your registration is NOT successful</h1>"; 
      }
        }
      }

  
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>B&ATraining</title>
</head>
<style><?php include ''; ?></style>
<body>
    <h2> Registration </h2>
    <form class="" action="registration.php" methode="post" autocomplete="OFF" >
        <!-- <label for="">Name</label>
        <input type="text" name="fname" ></input> 

        <label for="">lname</label>
        <input type="text" name="lname" ></input> -->

        <label for="">username</label>
        <input type="text" name="username" required value=""></input>

        <!-- <label for="">Number</label>
        <input type="num" name="Number" ></input> -->

        <label for="">email</label>
        <input type="email" name="email" required value=""></input>

        <!-- <label for="">Country</label>
        <input type="text" name="Country" ></input>

        <label for="">city</label>
        <input type="text" name="City" ></input>

        <label for="">age</label>
        <input type="number" name="Age" ></input>

        <label for="">height</label>
        <input type="number" name="height" ></input>

        <label for="">weight</label>
        <input type="number" name="weight" ></input>

        <label for="">weight_goal</label>
        <input type="number" name="weight_goal" ></input>

        <label for="">type of coaching</label>
        <input type="number" name="type" ></input>

        <label for="">hours of sleep</label>
        <input type="number" name="sleep" ></input>

        <label for="">physical activity</label>
        <input type="number" name="activ" ></input> -->

        <label for="">Cpassword</label>
        <input type="password" name="password" required value=""></input>

        <label for="">Confirm password</label>
        <input type="password" name="confirmpassword" required value=""></input>

        <button type="submit" name="submit">Register</button>

    </form>
    <a href="login.php">login</a>