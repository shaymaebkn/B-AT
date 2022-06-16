<?php include 'nav.php' ?>
<style><?php include 'auth.css' ?></style>
<body>
  
    <div id="all" class="container p-5 d-flex">
        <br>
            <div class=" flex-fill ">
                
                <h2> LOGIN To Your Account </h2><br>
                <form class="container" action="login1.php" method="POST">
                    <div class="buttons">
                        <button class="butt">coach </button>
                        <input class="radio" type="radio" name="user" value="coach">
                        <button class="butt"> coaché </button>
                        <input type="radio" class="radio" name="user" value="coaché">
                    </div><br>

                    
                    <input class="inpu" type="email" name="email" size="30"  required value="" placeholder="Email Adress">
                    <br><br>
                    <input type="password" class="inpu" size="30" name="password" required value="" placeholder="Password">
                    <br><br>
                    <input  class="radio" type="radio">Remember me 
                    <input type="submit" id="buttsubmit" value="LOGIN" name="submit" >
                </form>
            </div>
            <div class="flex-fill">
                <img src="../images/image 5.png" alt="" style="width:80%;">
            </div>
        
    </div>
    </form>
</body>