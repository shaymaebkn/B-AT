<?php include 'nav.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>B&ATraining</title>
</head>
<style><?php include 'style.css'; ?></style>
 <body style="background-color:black; color:white;">
    <div class="container">
    <h2> Registration </h2>
    <form class="container" action="insertclient.php" method="post"  >
        <label for="">Name</label>
        <input type="text"  name="fname" ></input> 
        <br>
        <label for="">lname</label>
        <input type="text" name="lname" ></input>
        <br>
        <label for="">username</label>
        <input type="text" name="username" required value=""></input>
        <br>
        <label for="">Number</label>
        <input type="num" name="Number" ></input>
        <br>
        <label for="">email</label>           
        <input type="email" name="email" required value=""></input>
        <br>
        <label for="">Country</label>           
        <input type="text" name="Country" ></input>
        <br>
        <label for="">city</label>
        <input type="text" name="City" ></input>           
        <br>
        <label for="">age</label>
        <input type="number" name="Age" ></input>           
        <br>
        <label for="">height</label>           
        <input type="number" name="height" ></input>           
        <br>
        <label for="">weight</label>
        <input type="number" name="weight" ></input>
        <br>
        <label for="">weight_goal</label>
        <input type="number" name="weight_goal" ></input>
        <br>
        <label for="">type of coaching</label>
        <input type="text" name="type" ></input>
        <br>
        <label for="">hours of sleep</label>
        <input type="number" name="sleep" ></input>
        <br>
        <label for="">physical activity</label>
        <input type="text" name="activ" ></input>
        <br>
        <label for="">Cpassword</label>
        <input type="password" name="password" required value=""></input>
        <br>
        <input type="submit" name="submit">

    </form>
    <a href="login.php">login</a>
    </div>