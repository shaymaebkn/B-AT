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
<body>
    <h2> Registration </h2>
    <form class="" action="insertclient.php" method="post"  >
        <label for="">Name</label>
        <input type="text" name="fname" ></input> 

        <label for="">lname</label>
        <input type="text" name="lname" ></input>

        <label for="">username</label>
        <input type="text" name="username" required value=""></input>

        <label for="">Number</label>
        <input type="num" name="Number" ></input>

        <label for="">email</label>
        <input type="email" name="email" required value=""></input>

        <label for="">Country</label>
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
        <input type="text" name="type" ></input>

        <label for="">hours of sleep</label>
        <input type="number" name="sleep" ></input>

        <label for="">physical activity</label>
        <input type="text" name="activ" ></input>

        <label for="">Cpassword</label>
        <input type="password" name="password" required value=""></input>

        <input type="submit" name="submit">

    </form>
    <a href="login.php">login</a>