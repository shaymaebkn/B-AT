
<?php 
    include_once '../connect/connection.php';
    session_start();
    if(isset($_SESSION['password']) && isset($_SESSION['email'])) {

  

    $query=mysqli_query($con,"SELECT * FROM `clients` WHERE email='?'");
     

    // echo $_SESSION['email'];
     ?>
     <style><?php include "users.css" ?></style>
     
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="coaching.css">
    <link rel="shortcut icon" type="" href="../images/logopng.png" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Royalty Coaching</title>
    <link rel="shortcut icon" type="" href="../images/logopng.png" />
</head>
<body>
    <header>
        <!-- nav -->
        <nav class="navbar">
        <div class="container">
                <a class="navbar-brand" href="../view/home.php">
                    <img src="../images/logosvg.svg" alt="" width="70" height="60">
                </a>
                <ul class="nav justify-content-end">

                    <div class="line"> </div>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <img src="../images/iconnotif.png" alt="notificationicon" width="40px" height="40px">
                        </a>
                    </li>
                    <div class="linenav"> </div>

                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">
                            <img src=""  class="rounded-circle" alt="userimg">
                            <p><?php echo $_SESSION['username'];?></p>
                        </a>
                    </li>
                    
                    

                </ul>
            </div>
        </nav>
        





     <?php
    }
else{
// header('location:login1.php');

}
?>

