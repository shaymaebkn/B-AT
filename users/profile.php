<style><?php include "users.css" ?></style>
<?php include 'usernav.php' ?>
<?php 
    include_once '../connect/connection.php';
   
    if(isset($_SESSION['password']) && isset($_SESSION['email'])) {

  

    $query=mysqli_query($con,"SELECT * FROM `clients` WHERE email='?'");

     ?>
 
<body id="all" >
<div class="d-flex" style="height:100%;">
                
                <div id="left" class="p-5 m-2">
                    <div class="d-flex flex-column mb-3">
                        <div class="p-2">
                            <a href="home.php">
                                <img src="../images/calendericon.png" alt="" width="60" height="40">
                            </a>
                        </div>
                        <div class="lineleft"></div>
                        <div class="p-2">
                            <a href="">
                                <img src="../images/chaticon.png" alt="" width="40" height="40">
                            </a>
                        </div>
                        <div class="lineleft"> </div>
                        <div class="p-2">
                            <a href="">
                                <img src="../images/dieticon.png" alt="" width="70" height="40">
                            </a>
                        </div>
                    </div>  
                   
                </div>
                <br>
                <div id="right" class="p-3 flex-grow-1 m-2 flex-fill">
                    <div class="d-flex container">
                        <div class="flex-fill flex-grow-1">
                            <div id="name"><h2 class="text-center"><?php echo $_SESSION['username'];?></h2></div>
                            <br><br>
                            <div style="height:150px;"></div>
                            <div class="text-center">
                                <h5>phone Number : <?php echo $_SESSION['Number'];?></h5>
                                <h5>Email : <?php echo $_SESSION['email'];?></h5>
                                <h5>Country : <?php echo $_SESSION['Country'];?></h5>
                                <h5>type of coaching : <?php echo $_SESSION['type_coaching'];?></h5>
                            </div>

                        </div>
                        <div class="lineprofile"> </div>
                        <div class="flex-fill flex-grow-1">
                            <img src="../images/profile.png" alt="your profile img" width="230" height="230">
                            <br>
                            <div>
                                <h5> City :<?php echo $_SESSION['City'];?> </h5>
                                <h5> Age :<?php echo $_SESSION['Age'];?></h5>
                                <h5>height : <?php echo $_SESSION['Height'];?></h5>
                                <h5>weight : <?php echo $_SESSION['Weight'];?></h5>
                            </div>
                            <button id="logout"><a href="../auth/logout.php">Logout</a></button>
                        </div>
                        
                    </div>
                </div>
            </div>
</body>
</html>



     <?php
    }
else{
// header('location:login1.php');

}
?>

