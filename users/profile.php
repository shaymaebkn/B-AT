<style><?php include "users.css" ?></style>
<?php include 'usernav.php' ?>
<?php 
    include_once '../connect/connection.php';
   
    if(isset($_SESSION['password']) && isset($_SESSION['email'])) {

  

    $query=mysqli_query($con,"SELECT * FROM `clients` WHERE email='?'");

     ?>
 
<body>
<div id="all"  class="d-flex ">
                
                <div id="left" class="p-5 m-2">
                    <div class="d-flex flex-column mb-3">
                        <div class="p-2">
                            <a href="">
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
                                <img src="../images/dieticon.png" alt="" width="60" height="40">
                            </a>
                        </div>
                    </div>  
                   
                </div>
                
                <br>
                <div id="right" class="p-3 flex-grow-1 m-2 flex-fill">
                    <div class="d-flex">
                        <div class="flex-fill flex-grow-1">

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

